<?php
namespace App\Http\Controllers;

use App\Notifications\NewProjetPostNotification;
use App\Projet;
use App\ProjetNouvelle;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class EspacePorteurProjetController extends Controller
{
	public function __construct()
    {  
      $this->middleware(['auth','clearance']);
    }

    public function index()
    {
        $projet= auth()->user()->projet;
        return view('espace_porteur.index',compact('projet'));
    }

    public function chat()
    {
        $projet= auth()->user()->projet;
        $favoriters = $projet->favoriters;
        return view('espace_porteur.chat',compact('favoriters'));
    }

    public function edit()
    {
        $projet= auth()->user()->projet;
        return view('espace_porteur.edit_projet_espace',compact('projet'));
    }

    public function createNouvelle()
    {
        return view('espace_porteur.create_nouvelle');
    }

    public function storeNouvelle(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $photo = $request->file('photo');
        $title = $request['title'];
        $description = $request['description'];
        $projet_nouvelle = ProjetNouvelle::create([
        'title' => $title,
        'description'=>$description,
        'projet_id'=> auth()->user()->projet->id
        ]);

        if ($photo)
        {
            $input['imagename'] = time().'.'.$photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/photo_nouvelles');
            $photo->move($destinationPath, $input['imagename']);
            $projet_nouvelle->photo = time().'.'.$photo->getClientOriginalExtension();
            $projet_nouvelle->save();
        }

        $projet= $projet_nouvelle->projet;

        foreach ($projet->favoriters as $user) {
        $user->notify(new NewProjetPostNotification( $projet));
        }

        return redirect()->route('projet_news')->with('flash_message', 'la nouvelle,'. $projet_nouvelle->name.' created');
    }

    public function myaccount()
    {
        $user= auth()->user();   
        return view('espace_porteur.edit_account',compact('user'));
    }

    public function update_myaccount($id,Request $request)
    {
    	$user = User::updateOrCreate(['id'=>$id],$request->all());
        return back();
    }

    public function destroy($id)
    {
        $projet_nouvelle = ProjetNouvelle::findOrFail($id);
        $projet_nouvelle->delete();
        return redirect()->route('projet_news')->with('flash_message','ProjetNouvelle successfully deleted');
    }
}

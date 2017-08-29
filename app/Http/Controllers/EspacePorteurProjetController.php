<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Projet;
use App\User;
use App\ProjetNouvelle;
use Illuminate\Http\Request;
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
    $users = User::all();
    return view('espace_porteur.chat',compact('users'));
}
public function edit()
{
    $user = User::findOrFail(auth()->id());
    $projet = $user->projet;
// $projet = Projet::findOrFail($id);
//Find post of id = $id
        return view('espace_porteur.edit_projet_espace',compact('projet'));
}

public function createNouvelle()
{
return view('espace_porteur.create_nouvelle');
}


public function storeNouvelle(Request $request)
{
$this->validate($request,
[
'title'=>'required',
'description'=>'required',
'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);
$photo = $request->file('photo');
$title = $request['title'];
$description = $request['description'];
$projet_nouvelle = ProjetNouvelle::create([
'title' => $title
,'description'=>$description,
'projet_id'=>auth()->user()->projet->id
]);
if ($photo)
{
$input['imagename'] = time().'.'.$photo->getClientOriginalExtension();
$destinationPath = public_path('/images/photo_nouvelles');
$photo->move($destinationPath, $input['imagename']);
$projet_nouvelle->photo = time().'.'.$photo->getClientOriginalExtension();
$projet_nouvelle->save();
}
return redirect()->route('projet_news')
->with('flash_message', 'la nouvelle,
'. $projet_nouvelle->name.' created');
}

public function destroy($id)
{
$projet_nouvelle = ProjetNouvelle::findOrFail($id);
$projet_nouvelle->delete();
return redirect()->route('projet_news')
->with('flash_message',
'ProjetNouvelle successfully deleted');
}

}
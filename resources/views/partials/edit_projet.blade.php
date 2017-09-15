@include('layouts.errors')
<div class="row">
    <div class="nine wide column">
        {{ Form::model($projet, array('route' => array('projet.update', $projet->id), 'method' => 'PUT','files' => true)) }}
        <div class="ui form segment">
            <div class="ui centered grid">
                <div class="eight wide column">
                    <div class="field">
                        <label>Décrivez-nous en détail votre projet*</label>
                        <textarea style="margin-top: 0px; margin-bottom: 0px; height: 168px;"  name="description" required>
                        {{$projet->description}}
                        </textarea>
                    </div>
                    <div class="field">
                        <label>type de projet</label>
                        <select class="ui search dropdown" name="categorie">
                            <option value="">categorie</option>
                            <option value="type1">Alabama</option>
                            <option value="type2">Alaska</option>
                        </select>
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="field">
                        <label>Montant estimé en DH *</label>
                        <div class="ui left icon input">
                            <input type="number"  value="{{$projet->montant_estime}}" name="montant_estime" placeholder="Montant..." required>
                            <i class="money icon orange"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label>Titre du projet*</label>
                        <div class="ui left icon input">
                            <input type="text" value="{{$projet->title}}" name="title" placeholder="Titre du projet" required>
                            <i class="idea icon orange"></i>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="ui one column stackable center aligned page grid">
                <div class="column twelve wide">
                    <button class="ui orange right labeled icon button" type="submit">
                    Suivant
                    <i class="right chevron icon"></i>
                    </button>
                </div>
            </div>
            <p>Tout les champs avec * doivent être obligatoirement remplis</p>
        </div>
        {{ Form::close() }}
        <div class="ui segment form">
            {{ Form::model($projet, array('route' => array('updatephotos', $projet->id), 'method' => 'PUT','files' => true)) }}
            <div class="field">
                <label>Ajouter les photos de Votre projet ici</label>
                <input type="file" name="photos[]" multiple  required />
                {!! Form::submit('upload', ['class' => 'ui blue button ']) !!}
            </div>
            {{ Form::close() }}
        </div> 
       
        <div class=" field">
            <div class="ui segment">
                <h4>Photos de projet</h4>
                <div class="ui three cards">
                    @foreach($projet->photos as $photo)
                    <div class="card" style="max-width: 150px;">
                        <div class="content">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['deletephoto', $photo->id] ]) !!}
                    
                             <img src="{{Cloudder::show($photo->filename)}}">

                         {!! Form::submit('DELETE', ['class' => 'ui  fluid red button ']) !!}
                        {!! Form::close() !!}
                        </div>
                      
                    </div>
                   
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
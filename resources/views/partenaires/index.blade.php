@extends('layouts.master_1')
@section('content')
<div class="row" style="background-color:rgba(214, 212, 212,.2);padding:6em 0; ">
  <div class="nine wide  column">
    <div class="ui segment">
      <div class="ui container three cards">
        @foreach($partenaires as $partenaire)
        <div class="ui card">
          <a class="image" href="#">
            <img src="{{asset('images/partners/'.$partenaire->logo)}}">
          </a>
          <div class="content">
            <div class="header"><a href="{{route('partenaire.show',$partenaire->id)}}">{{$partenaire->name}}</a>
          </div>
          <div class="meta">
            {{$partenaire->created_at->diffForHumans()}}
          </div>
        </div>
        <div class="extra content">
               <div class="ui divider">
    
         </div>
        @role('Admin')
            <div class="ui buttons">
                <a href="{{ route('partenaire.edit', $partenaire->id) }}" class="ui yellow button" role="button">
                    <i class="edit icon"></i>
                        Edit
                </a>
                <div class="or"></div>
                {!! Form::open(['method' => 'DELETE', 'route' => ['partenaire.destroy', $partenaire->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}
                {!! Form::close() !!}
        
            </div>
        @endrole
        </div>
      </div>
      @endforeach
      {{$partenaires->links()}}
    </div>
  </div>
</div>
<div class=" five wide column">
  <div class="ui segment">
    <div class="ui header">
      <i class=" world icon"></i>
      Liens utiles
      <br>
      <div class="ui sub header">  pour copier les informations de chaque <br>
      service cliquer sur elle</div>
      
    </div>
  </div>
  <div class="ui vertical fluid  menu" style="height: 100vh; overflow: scroll; border:0;">
    <a class="item" onclick="copyToClipboard(this)">
      <h4 class="ui header">ODCO, Office de Développement et de la Coopération</h4>
      <p><i class=" world icon"></i>Site : www.odco.gov.ma/</p>
      <p>Centralisant les demandes de création de coopératives et les accompagnants pendant 5 années leur phase de création (Programme Morafaka).</p>
    </a>
    
    <a class="item" onclick="copyToClipboard(this)">
      <h4 class="ui header">Ministère de l'Artisanat et de l'Économie Sociale</h4>
      <p><i class=" world icon"></i>Site : http://www.social.gov.ma</p>
      <p>Les coopératives sont sous-tutelle de ce ministère. Facilitant et cadrant leur développement, il peut vous être utile en matière de contact et commercialisation.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> ADS, Agence de Développement Social</h4>
      <p> <i class="pin icon"></i>ADRESSE:Avenue Allal El Fassi Madinate Al Irfane – Rabat – BP : 6816 MAROC </p>
      <p> <i class="mail icon"></i>E-MAIL: ads@ads.gov.ma</p>
      <p> <i class="fax icon"></i> FAX 1 : +212 (0)5 37 68 27 31</p>
      <p> <i class="phone icon"></i> TEL : +212 (0)5 37 68 34 10</p>
      <p><i class="phone icon"></i>Info Centre : 0537-76.70.78</p>
      <p><i class=" world icon"></i>Site : http://www.ads.ma/</p>
      <p>Agence public accompagnant (Commercialisation et formation) les coopératives et les entreprises, à leur demande. ADS finance aussi les microprojets grâce à des caisses solidaires de développement.</p>
    </a>
    <a class="item">
      <h4 class="ui header">Ministère de la solidarité, de la femme, de la famille et du développement social</h4>
      <p><i class=" world icon"></i>Site : http://www.social.gov.ma</p>
      <p>Accompagnant le travail social, associatif et solidaire. Programmant aussi le réseautage des associations.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> EN, Entraide Nationale</h4>
      <p><i class=" world icon"></i>Site : http://www.entraide.ma</p>
      <p>Identifiant les projets sociaux (Alphabétisation, Aide aux personnes (Femmes, Enfants, Jeunes,..) dans des situations difficiles, …) à réaliser et suivant leurs exécutions. Acteurs ( EN, ONG, Collectivité Territoriale, Etablissement Publique, Populations,…)</p>
    </a>
    <a class="item">
      <h4 class="ui header">INDH, Initiative Nationale pour le Développement Humain</h4>
      <p> <i class="pin icon"></i>ADRESSE:Boulevard Mohammed V Quartier Administratif Rabat.10000  MAROC </p>
      <p> <i class="mail icon"></i>E-MAIL: fcmcis@menara.ma</p>
      <p> <i class="fax icon"></i> FAX : 05 37 21 55 8 </p>
      <p> <i class="phone icon"></i> TEL : 05 37 21 55 62</p>
      <p> <i class="phone icon"></i> TEL : 05 37 21 55 77</p>
      <p><i class=" world icon"></i>Site : www.indh.gov.ma</p>
      <p>Finançant à hauteur de 70% du projet plafonné à 300 000 DH, Chaque région lance son appel à projets, chaque année.</p>
    </a>
    <a class="item">
      <h4 class="ui header">MAPM, Ministère de l’Agriculture et de la Pêche Maritime</h4>
      <p> <i class="pin icon"></i>ADRESSE:venue Mohamed V, Quartier administratif Place Abdellah Chefchaouni, B.P. 607, Rabat MAROC </p>
      <p> <i class="phone icon"></i> TEL : 0212 (0)537 66 53 00</p>
      <p> <i class="phone icon"></i> TEL : 0212 (0)537 66 56 00</p>
      <p> <i class="phone icon"></i> TEL : 0212 (0)537 66 54 50</p>
      <p><i class="phone icon"></i>Info Centre : 0537-76.70.78</p>
      <p><i class=" world icon"></i>Site : http://www.agriculture.gov.ma/</p>
      <p>Intéressant pour les coopératives qui opèrent dans ce secteur. Vous pouvez trouver des informations à propos des Contacts, Programmes de l’Etat, Stratégies, d’autres partenaires, de subventions, … Etc. Il est nécessairement utile pour des informations concernant les études de marché, cela s’applique pour les autres ministères qui sont dans les autres secteurs.</p>
    </a>
    <a class="item">
      <h4 class="ui header">ADA, Agence du Développement Agricole</h4>
      <p> <i class="pin icon"></i>ADRESSE:Espace les Patios Angle Avenue Annakhil et Mehdi Ben Barka, Bâtiments 2 et 3 , 3ième étage Hay Riad , RABAT</p>
      <p> <i class="mail icon"></i>E-MAIL:  b.kasmi@ada.gov.ma</p>
      <p> <i class="fax icon"></i> FAX 1 : (212) 537 57 37 40 </p>
      <p> <i class="phone icon"></i> TEL : (212) 537 57 37 12</p>
      <p><i class=" world icon"></i>Site : http://www.ada.gov.ma</p>
      <p>Agence public finançant et accompagnant (Valorisation) des investissements dans le secteur agricole dans le cadre de la stratégie Plan Maroc Vert.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> OCE, Office de Commercialisation et d’Export (Maroc Tasswiq)</h4>
      <p> <i class="pin icon"></i>ADRESSE:45, av de l'Armée Royale - 20000 Casablanca  MAROC </p>
      <p> <i class="mail icon"></i>E-MAIL: communication@maroctaswiq.com</p>
      <p> <i class="fax icon"></i> FAX  : 0522 313 079 </p>
      <p> <i class="phone icon"></i> TEL : 0522 464 062</p>
      <p> <i class="phone icon"></i> TEL : 0522 464 064</p>
      <p><i class=" world icon"></i>Site : http://www.maroctaswiq.com/</p>
      <p>Il s’occupe de la commercialisation et de l’exportation des produits des coopératives.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> Maroc Export</h4>
      <p> <i class="pin icon"></i>ADRESSE:23, Rue Ibnou Majed El bahar, 20000 Casablanca MAROC </p>
      <p> <i class="mail icon"></i>E-MAIL:info@marocexport.ma</p>
      <p> <i class="fax icon"></i> FAX 1 :05 22 30.17.93 </p>
      <p> <i class="fax icon"></i> FAX 2 :05 22 45.05.57 </p>
      <p> <i class="phone icon"></i> TEL :05 22 30.74.47</p>
      <p> <i class="phone icon"></i> TEL :05 22 30.22.31</p>
      <p> <i class="phone icon"></i> TEL :05 22 30.28.54</p>
      <p> <i class="phone icon"></i> TEL :05 22 30.22.10</p>
      <p> <i class="phone icon"></i> TEL :05 22 30.75.88</p>
      <p> <i class="phone icon"></i> TEL :05 22 31.87.07</p>
      <p><i class=" world icon"></i>Site : http://www.marocexport.ma/</p>
      <p>Organe visant à accompagner les entreprises qui veulent exporter leur produit. En fournissant les contacts des partenaires et des informations sur le marché étranger.</p>
    </a>
    <a class="item" >
      <h4 class="ui header"> PUM (Programme d'envoi de managers) Netherlands senior experts</h4>
      <p> <i class="mail icon"></i>E-MAIL: info@pum.nl</p>
      <p> <i class="fax icon"></i> FAX  :+31 (0)70 349 05 90 2509 </p>
      <p> <i class="phone icon"></i> TEL : +31 (0)70 349 05 55 BP 93078</p>
      <p><i class=" world icon"></i>Site : https://www.pum.nl</p>
      <p>Il suffit de leur demander, Ils vous enverront un expert Hollandais retraité pour vous conseiller et vous guider.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> Chambres d’Industrie et de Commerce Marocaines</h4>
      <p> <i class="pin icon"></i>ADRESSE:n° 1, Résidence Marrakech, Angle Avenue Résistance et Rue Afghanistan, 3ème étage, Appt. 19, Rabat Océan 10040 Maroc</p>
      <p> <i class="mail icon"></i>E-MAIL: info@tanmia.ma</p>
      <p> <i class="fax icon"></i> FAX 1 : 05 37 70 73 42 </p>
      <p> <i class="phone icon"></i> TEL : 05 37 70 73 50</p>
      <p><i class=" world icon"></i>Site :www.tanmia.ma</p>
      <p>Portail internet partageant l’information entre les associations et les coopératives. Informations concernant les appels à projet et les outils pour la gestion de l’association.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> Chambres d’Industrie et de Commerce Marocaines</h4>
      <p> <i class="pin icon"></i>ADRESSE:6, RUE ARFOUD-HASSAN B.P.218 RABAT MAROC </p>
      <p> <i class="mail icon"></i>E-MAIL: fcmcis@menara.ma</p>
      <p> <i class="fax icon"></i> FAX 1 : 037-76.70.76 </p>
      <p> <i class="fax icon"></i> FAX 2 : 037-76.70.96 </p>
      <p> <i class="phone icon"></i> TEL : 0537-76.70.51</p>
      <p><i class="phone icon"></i>Info Centre : 0537-76.70.78</p>
      <p><i class=" world icon"></i>Site :www.fcmcis.ma</p>
      <p>Ces chambres sont consultables en termes d’informations sur le marché et discutent des actualités économiques et juridiques. En ce qui concerne l’industrie et le commerce.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> FM5, Fondation Mohamed V pour la Solidarité</h4>
      <p> <i class="pin icon"></i>ADRESSE: 3, Rue Arrissani, Hassan B.P:4253, Rabat, MAROC </p>
      <p> <i class="fax icon"></i> FAX :+212 (0)5 37 26 36 39 </p>
      <p> <i class="phone icon"></i> TEL :+212 (0)5 37 26 36 37</p>
      <p><i class="phone icon"></i>Info Centre :+212 (0)5 37 26 36 38</p>
      <p><i class=" world icon"></i>Site :http://www.fm5.ma/</p>
      <p>Soutenir financièrement et logistiquement les projets qui rentrent dans le cadre de la lutte contre la pauvreté et le développement durable.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> Informations sur la gestion et l’exploitation des collectivités ethniques et terres collectives :</h4>
      <p>Si les coopérateurs possèdent des terres collectives ou appartiennent à une collectivité ethniques, et veulent exploiter cette terre dans le cadre de votre projet. Pour avoir plus d’informations, consultez le site</p>
      <p><i class=" world icon"></i>Site :http://www.terrescollectives.ma/</p>
    </a>
    <a class="item">
      <h4 class="ui header"> Informations sur les démarches administratives :</h4>
      <p>Si les coopérateurs possèdent des terres collectives ou appartiennent à une collectivité ethniques, et veulent exploiter cette terre dans le cadre de votre projet. Pour avoir plus d’informations,</p>
      <p> <i class="phone icon"></i> TEL :0802003737</p>
      <p><i class=" world icon"></i>Site :http://www.service-public.ma/</p>
    </a>
    <a class="item">
      <h4 class="ui header"> Informations sur les démarches administratives :</h4>
      <p>Pour avoir des informations sur les procédures administratives consultez le site :</p>
      <p> <i class="phone icon"></i> TEL :0802003737</p>
      <p><i class=" world icon"></i>Site :http://www.service-public.ma/</p>
    </a>
    <a class="item">
      <h4 class="ui header"> Centres régionaux d’investissement :</h4>
      <p>Ces centres vous donneront des informations utiles pour votre future invetissement dans la région. Informations comme : Démographie, Activités déjà existantes, statistiques, Démarches administratives,…</p>
    </a>
    <a class="item">
      <h4 class="ui header">Toutes les adresses utiles sont reprises dans ce site :</h4>
      <p><i class=" world icon"></i>Site :http://www.maroc.ma/</p>
      <p>Pour les administrations publiques, les agences (ODECO, ADS,…) possèdent des délégations régionales à chacune des régions.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> HCP, Haut-Commissariat au Plan :</h4>
      <p>Informations économiques et statistiques pointues dans le secteur que vous voulez opérez :
      Vous pouvez consulter :</p>
      <p><i class=" world icon"></i>Site www.hcp.ma</p>
      
    </a>
    <a class="item">
      <h4 class="ui header"> ORMVA, Office Régional de Mise en Valeur Agricole :</h4>
      <p><i class=" world icon"></i>Site http://www.marocagriculture.com/offices-regionaux-de-mise-en-valeur-agricole-ormva.html</p>
      <p>Pouvant aider les coopérateurs travaillant dans le secteur agricole en termes de conseils et de formation et d’aménagement en équipements hydro agricoles.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> ANOC, Association Nationale Ovine et Caprine :</h4>
      <p> <i class="pin icon"></i>ADRESSE: 457, Av. Hassan II Rés. Maryam Appt B10 Agdal – RABAT MAROC </p>
      <p> <i class="mail icon"></i>E-MAIL: anocdg@menara.ma</p>
      <p> <i class="fax icon"></i> FAX :037 23 13 71</p>
      <p> <i class="phone icon"></i> TEL :037 69 08 02</p>
      <p><i class="phone icon"></i>Info Centre :037 69 08 03</p>
      <p><i class=" world icon"></i>Site http://www.anoc.ma/</p>
      <p>Pouvant aider les éleveurs d’ovins et de caprins en termes de formation pour l’élevage ou production de fromage, de défense d’intérêts, de l’amélioration génétique de la race et de suivi régulier de vaccination contre les maladies infectieuses.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> AMAPPE, Association Marocaine d’Appui à la Promotion de la Petite Entreprise </h4>
      <p> <i class="pin icon"></i>7, Rue Arfoud Appt.02 Quartier Hassane Rabat 10000 Maroc</p>
      <p> <i class="mail icon"></i>info@anpme.ma</p>
      <p> <i class="fax icon"></i> FAX :(+212) 05 37 70 75 04</p>
      <p> <i class="phone icon"></i> TEL :(+212) 05 37 70 75 02</p>
      <p><i class=" world icon"></i>http://www.amappe.org.ma/</p>
      <p>Association assistant la création et l’accompagnement des coopératives.</p>
    </a>
    <a class="item">
      <h4 class="ui header"> ANPME, Agence Nationale pour la Promotion de la Petite et Moyenne Entreprise </h4>
      <p> <i class="pin icon"></i>3, Avenue Annakhil 457 Lot 11, parcelle n° 3 Hay Riad, Rabat, MAROC </p>
      <p> <i class="mail icon"></i>info@anpme.ma</p>
      <p> <i class="fax icon"></i> FAX :0537 57 20 70</p>
      <p> <i class="phone icon"></i> TEL :0537 57 44 00</p>
      <p><i class="phone icon"></i>Info Centre :0537 57 44 44</p>
      <p><i class=" world icon"></i>Site :http://www.anpme.ma/</p>
      <p>Cette agence gouvernementale aide à la création des petites et moyennes entreprises. Elle peut vous être utile en matière d’information, de contact avec les entreprises se trouvant dans le même marché ou de potentiels fournisseurs et de formation.</p>
    </a>
  </div>
</div>
</div>
</div>
@can('Create Partenaire')
<div class="row">
<a class="fluid ui orange large button" href="{{URL::to('partenaire\create')}}">
<i class="handshake icon"></i>
ajouter des Partenaires</a>
</div>
@endcan
@endsection
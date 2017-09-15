<div class="row"  style="background-color: rgba(214, 212, 212,.2);padding:0;margin:0">
  <ais-index app-id="{{ config('scout.algolia.id') }}"
  api-key="{{ env('ALGOLIA_SECRET') }}"
  :query-parameters="{'page': page}">
  <div class="ui stackable celled grid">
    <div class="row">
      <div class="four wide column">
        
        <div class="ui segment ">
          <ais-tree-menu :attributes="['categorie']" :class-names="{
          'ais-tree-menu__list': 'list-unstyled',
          'ais-tree-menu__count': 'badge'
        }">
        <h3 slot="header">projets suivant les categories</h3>
      </ais-tree-menu>
    </div>
    <div class="ui segment">
      <ais-price-range attribute-name="montant_estime" currency="DH" currency-placement="right" :class-names="{
      'ais-price-range__input': ''
    }">
    <h3 slot="header">projet suivant le Budjet</h3>
    <p slot="default"></p>
  </ais-price-range>
</div>

</div>

<div class="twelve wide column">
  <div class="ui very padded centered grid" style="padding-right: 30px;">
    <div class="row" style="padding-bottom:0; ">
      <div class="column">
        <ais-search-box>
          <div style="padding: 2em;">
            <ais-input
            placeholder="Search Projet..."
            :class-names="{
            'ais-input': ''
          }"
          ></ais-input>
          <span class="ui buttons">
            <ais-clear :class-names="{'ais-clear': 'ui button'}">
            </ais-clear>
            <button class="ui positive button" type="submit">
              <i class="search icon"></i>
            </button>
          </span>
        </div><!-- /input-group -->
      </ais-search-box>
    </div>
  </div>
  <div class="row" style="padding-top: 0">
    <div class=" four wide left floated column">
      <ais-stats></ais-stats>
    </div>
    
    <div class="eight wide column">
      <ais-sort-by-selector :indices="[
      {name:'projets', label: 'plus récent'},
      {name:'projet_sorted_by_montant_asc',label:'budget le plus bas'},
      {name:'projet_sorted_by_montant_dsc',label:'budget le plus élevé'}
      ]"
      :class-names="{'ais-sort-by-selector': '' }"
      >
    </ais-sort-by-selector>
    <ais-results-per-page-selector :options="[12, 24, 48]" :class-names="{'ais-results-per-page-selector': '' }"></ais-results-per-page-selector>
  </div>
  
  <div class="four right floated wide column">
    <ais-powered-by></ais-powered-by>
  </div>
  
</div>
<div class="row">
  <div class="ui four cards">
    <ais-results :stack="true">
      
      <template scope="{ result }">
        <div class="ui card" style="float: left; display: inline;margin-left: 20px;">
          <img src="{{asset('images/home_green_projet.png')}}">
          <div class="content">
            <a class="" :href="'projet/'+result.id" >
              <ais-highlight :result="result" attribute-name="title"></ais-highlight>
            </a>
            <div class="result__categorie">
              <ais-highlight :result="result" attribute-name="description"></ais-highlight>
            </div>
            
            <div class="result__montant_estime">@{{result.montant_estime}}</div>
          </div>
        </div>
      </template>
    </ais-results>
  </div>
  <ais-no-results></ais-no-results>
  
  <div v-observe-visibility="loadMore">Loading more...</div>
</div>
</div>
</div>

</div>
</div>


</ais-index>
</div>
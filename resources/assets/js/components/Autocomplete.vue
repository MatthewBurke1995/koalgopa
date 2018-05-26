<template>
 <div class="form-group row">


  <div class="col-md-12">
    <form class="navbar-form" role="search" action="/company">
      <div class="input-group add-on">
        <input class="form-control" placeholder="영어로 회사 검색해보세요" name="search" id="search" type="text" v-model="query" v-on:keyup="autoComplete" autocomplete="off" value="">


        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">  <i class="fa fa-search" aria-hidden="true"></i></button>


       </div>
      </div>

  <div class="panel-footer" v-if="results.length"style="position: absolute; width:95%; z-index: 999;">
   <ul class="list-group" >
    <li class="list-group-item" v-for="result in results" >
     <a :href="'/company?search='+ result.companyTitle">{{ result.companyTitle }}</a>
    </li>
   </ul>
  </div>

    </form>





  </div>
 </div>
</template>

<script>
 export default{
  data(){
   return {
    query: '',
    results: []

   }
  },
  methods: {
   autoComplete(){
    this.results = [];
    if(this.query.length > 2){
     axios.get('/api/search',{params: {query: this.query}}).then(response => {
      this.results = response.data;
     });
    }
   }
  }
 }
</script>


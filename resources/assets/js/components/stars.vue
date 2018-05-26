<template>
  <div class="mb-0">
    <p class="lead">
    <span v-for="n in this.star_int"><i class="fas fa-star"></i></span><span v-if="parseFloat(this.stars)%1 > 0.5"><i class="fas fa-star-half"></i></span>  {{stars}}

   </p>
  </div>
</template>


<script>
export default {
  props: ['stars'],

  computed : {
      star_int: function () {
      return Math.floor(this.stars);
      }

    }

}

</script>

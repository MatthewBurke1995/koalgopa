<template>



  <div class="blog-post">
  <div class="card flex-lg-row mb-2 box-shadow">

      <div class="col-lg-3" style="display: flex; align-items: center; flex-wrap: wrap;">
        <img class="card-img-left mx-2 rounded img-fluid flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" :src="interviewthumbnail" style="max-height:100%">
      </div>

          <div class="col-lg-9">

						<div class="card-body d-flex flex-column align-items-start">

							<strong class="d-inline-block mb-1 text-primary">{{interviewcreatedtime}}</strong>
							<h3 class="mb-1">
										<a :href="'interviews/' + interviewid">{{ interviewtitle }} </a>
									</h3>
							<div v-html="interviewtext" class="card-text mb-1"></div>

						</div>
					</div>

      </div>

  </div>


</template>


<script>
export default {
  props: ['interviewtitle', 'interviewcreatedtime', 'interviewtext', 'interviewid', 'author', 'interviewthumbnail']
}
</script>

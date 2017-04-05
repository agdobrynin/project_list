<template>
  <div :projects="projects" :linkto="linkto" class="columns is-multiline">
      <div v-for="project in mutableProjects" class="column is-3">
          <div class="panel-heading">
              <a
                class=""
                @click.prevent="show($event.target.href)"
                :href="linkto+project.id">{{project.name}}</a>
        </div>
      </div>
  </div>
</template>

<script>
export default {

    props:['projects', 'linkto'],

    data(){
        return {
            mutableProjects: this.projects
        }

    },

    methods:{
        AddProject(project){
            projects.push(project);
        },
        show(url){

            return new Promise( ( resolve, reject) =>{
                axios.get(url)
                .then( response => {
                    resolve( response.data );
                })
                .catch( error => {
                    reject( error.response.data );
                });
            })

        }
    }
}
</script>

<style lang="css">
</style>

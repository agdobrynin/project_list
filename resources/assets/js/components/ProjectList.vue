<template>
  <div :mutableProjects="projects" :linkto="linkto" class="columns is-multiline">
      <div v-for="project in mutableProjects" class="column is-3">

          <article class="message is-info">
              <div class="message-header">
                {{project.name}}
                <button class="delete"></button>
              </div>
              <div class="message-body">
                {{ShowDescription(project.description,30)}}
                <p>
                    <a
                    class=""
                    @click.prevent="show($event.target.href)"
                    :href="linkto+project.id">открыть</a>
                </p>
              </div>
          </article>
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
        ShowDescription( text, max ){
            if( text.length > max ){
                return text.slice(0,max)+'...';
            }else{
                return text;
            }
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

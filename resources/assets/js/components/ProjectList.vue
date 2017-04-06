<template>
  <div :mutableProjects="projects" :linkto="linkto" class="columns is-multiline">
      <div v-for="project in mutableProjects" class="column is-3">

          <article class="message is-info">
              <div class="message-header">
                {{project.name}}
                <a
                    :href="linkto+project.id+'/delete'"
                    @click.prevent="deleteProject($event.target)"
                    class="button is-danger is-outlined icon is-small fa fa-times">

                </a>
              </div>
              <div class="message-body">
                  <a
                  class=""
                  @click.prevent="showProject($event.target.href)"
                  :href="linkto+project.id+'/show'">
                    <p>
                      {{showShortDescription(project.description,30)}}
                    </p>
                </a>
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
        showShortDescription( text, max ){
            if( text.length > max ){
                return text.slice(0,max)+'...';
            }else{
                return text;
            }
        },
        deleteProject(element){
            //покажем что запрос отправлен
            element.className += " is-loading";
            //для того чтобы класс is-loading показался
            element.blur();
            console.log(element.href);
            //axios await
            // remove element
            //element.parentElement.parentElement.className += " animated fadeOut";

        },
        showProject(url){

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
a.button{ text-decoration: none;}
a.icon{padding:0.05rem;}
</style>

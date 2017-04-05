<template>
  <ul :projects="projects" :linkto="linkto">
      <li v-for="project in mutableProjects">
          <a
            @click.prevent="show($event)"
            :href="linkto+project.id">{{project.name}}</a>
      </li>
  </ul>
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
        show(event){
            console.log(event.target.href);
        }
    }
}
</script>

<style lang="css">
</style>

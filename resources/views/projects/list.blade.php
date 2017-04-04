<div class="container" v-if="projects.length">
    <div class="content">
        <h1 class="title is-3">Список проектов</h1>
        <Project-List :projects="projects" linkto="/api/project/"></Project-List>
    </div>
    <p></p>
</div>
{{--
@if (count($projects))
    <div class="container">
        <div class="content">
        	<h1 class="title is-3">My Projects</h1>
        	<ul id="projectList">
        		@foreach ($projects as $project)
        			<li>
        				<a href="#">{{ $project->name }}</a>
        			</li>
        		@endforeach
        	</ul>
            <p></p>
        </div>
	</div>
@endif
--}}

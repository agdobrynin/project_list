@if (count($projects))
    <div class="container">
        <div class="content">
        	<h1 class="title is-3">My Projects</h1>
        	<ul>
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

<div>
	@foreach ($projects as $project)
        <h1>{{ $project->name }}</h1>
        {{ $project->description }}
    @endforeach
</div>

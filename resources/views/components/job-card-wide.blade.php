@props(['job'])

<x-panel>
    <div class="">
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-400 transition-colors duration-300">{{$job->employer->name}} </a>
        <h3 class="group-hover:text-blue-800 font-bold text-xl ransition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
            {{$job->title}}
</a>
        </h3>
        <p class="text-sm  mt-4">{{$job->schedule}} - from {{$job->salary}}</p>
    </div>
    <div class="">
        @foreach($job->tags as $tag)
        <x-tag :$tag>Scripting</x-tag>
@endforeach
    </div>
</x-panel>
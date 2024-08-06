
<x-filament::page>
    {{ $this?->infolist }}

    @if($this->record->type == "video")
    <video controls>
        <source src="{{ $this->record->getMedia("attachment")[0]->getFullUrl() }}" type="{{ $this->record->getMedia("attachment")[0]->mime_type}}">
        Your browser does not support the video tag.
    </video>
    @else
        <img src="{{ $this->record->getMedia("attachment")[0]->getFullUrl() }}" style="width:800px; height: 400px" >
    @endif


</x-filament::page>

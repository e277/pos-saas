@props([
    'error' => false,
    'disabled' => false

])


<div
    wire:ignore
    x-data
    x-init="
        FilePond.registerPlugin(FilePondPluginImagePreview);
        FilePond.setOptions({
            allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
                }
            }

        });
        FilePond.create($refs.input);
    ">
    <input @if($disabled) disabled="disabled" @endif  type="file" x-ref="input">

    @if($error)

        <span class="text-red-500 text-xs italic m-1">

            * {{ $error }}

        </span>

    @endif

</div>

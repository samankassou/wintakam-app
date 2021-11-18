<div
    wire:ignore
    x-data
    x-init="
        () => {
            const post = FilePond.create($refs.{{ $attributes->get('ref') ?? 'input' }});
            post.setOptions({
                allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }},
                server: {
                    process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        @this.upload('{{ $attributes->whereStartsWith('wire:model')->first() }}', file, load, error, progress)
                    },
                    revert: (filename, load) => {
                        @this.removeUpload('{{ $attributes->whereStartsWith('wire:model')->first() }}', filename, load)
                    },
                },
                allowImagePreview: {{ $attributes->has('allowImagePreview') ? 'true' : 'false' }},
                imagePreviewMaxHeight: {{ $attributes->has('imagePreviewMaxHeight') ? $attributes->get('imagePreviewMaxHeight') : '256' }},
                allowFileTypeValidation: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
                acceptedFileTypes: {!! $attributes->get('acceptedFileTypes') ?? 'null' !!},
                allowFileSizeValidation: {{ $attributes->has('allowFileSizeValidation') ? 'true' : 'false' }},
                maxFileSize: {!! $attributes->has('maxFileSize') ? "'".$attributes->get('maxFileSize')."'" : 'null' !!},
                labelIdle: `Images de votre logement <span class='filepond--label-action'>Sélectionner</span>`,
                labelFileLoading: 'Chargement...',
                labelTapToUndo: 'Cliquez pour annuler',
                labelFileProcessingComplete: 'Chargement terminé',
                labelTapToCancel: 'Cliquez pour annuler',
                labelTapToRetry: 'Cliquez pour réessayer',
                labelFileProcessing: 'Chargement',
            });
        }
    "
>
    <input type="file" data-allow-reorder="true" credits="false" x-ref="{{ $attributes->get('ref') ?? 'input' }}" />
</div>

@push('styles')
    @once
        <link href="{{ asset('vendor/filepond/filepond.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/filepond/filepond-plugin-image-preview.css') }}" rel="stylesheet">
    @endonce
    <style>
        @media (min-width: 30em) {
            .filepond--item {
                width: calc(50% - 0.5em);
            }
        }

        /* underline color for "Browse" button */
        .filepond--label-action {
        text-decoration-color: #002042;
        }

        /* the background color of the filepond drop area */
        .filepond--panel-root {
        background-color: rgb(236, 228, 228);
        }

        .filepond--file-action-button {
        background-color: rgba(0, 0, 0, 0.5);
        }

        /* the icon color of the black action buttons */
        .filepond--file-action-button {
        color: white;
        }

        [data-filepond-item-state='processing-complete'] .filepond--item-panel {
        background-color: rgb(16, 185, 129);
        }
    </style>
@endpush

@push('scripts')
    @once
        <script src="{{ asset('vendor/filepond/filepond-plugin-image-preview.js') }}"></script>
        <script src="{{ asset('vendor/filepond/filepond-plugin-file-validate-type.js') }}"></script>
        <script src="{{ asset('vendor/filepond/filepond-plugin-file-validate-size.js') }}"></script>
        <script src="{{ asset('vendor/filepond/filepond.js') }}"></script>
        <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            FilePond.registerPlugin(FilePondPluginFileValidateSize);
        </script>
    @endonce
@endpush

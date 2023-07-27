// Get the FilePond element
const inputElement = document.querySelector('input[type="file"]');
console.log(inputElement)

// Initialize FilePond
const pond = FilePond.create(inputElement, {
    acceptedFileTypes: ['image/*'], // Allow only images
    allowMultiple: true, // Allow multiple file selection
    allowReorder: true,
    instantUpload: false, // Disable instant upload (upload files when the user clicks a separate button)
    maxFiles: 5, // Allow up to 5 files
    maxFileSize: '5MB', // Limit file size to 5MB
    server: '/upload', // Replace with your server endpoint that handles file uploads
    labelIdle: 'Arraste e solte seus arquivos ou <span class="filepond--label-action">Pesquise</span>',
    labelFileWaitingForSize: 'Aguardando tamanho',
    labelFileSizeNotAvailable: 'Tamanho não disponível',
    labelFileCountSingular: 'arquivo na lista',
    labelFileCountPlural: 'arquivos na lista',
    labelFileLoading: 'Carregando...',
    labelFileAdded: 'Adicionado',
    labelFileLoadError: 'Erro durante o carregamento',
    labelFileRemoved: 'Removido',
    labelFileRemoveError: 'Erro durante a exclusão',
    labelFileProcessing: 'Enviando...',
    labelFileProcessingComplete: 'Envio completo',
    labelFileProcessingAborted: 'Envio cancelado',
    labelFileProcessingError: 'Erro durante o envio',
    labelFileProcessingRevertError: 'Erro durante a reversão',
    labelTapToCancel: 'toque para cancelar',
    labelTapToRetry: 'toque para tentar novamente',
    labelTapToUndo: 'toque para desfazer',
    labelButtonRemoveItem: 'Remover',
    labelButtonAbortItemLoad: 'Cancelar',
    labelButtonRetryItemLoad: 'Tentar novamente',
    labelButtonAbortItemProcessing: 'Cancelar',
    labelButtonUndoItemProcessing: 'Desfazer',
    labelButtonRetryItemProcessing: 'Tentar novamente',
    labelButtonProcessItem: 'Upload',
    labelMaxFileSizeExceeded: 'Arquivo muito grande',
    labelMaxFileSize: 'O tamanho máximo do arquivo é {filesize}',
    labelMaxTotalFileSizeExceeded: 'Tamanho total máximo do arquivo excedido',
    labelMaxTotalFileSize: 'O tamanho total máximo do arquivo é {filesize}',
    labelMaxFilesExceeded: 'Número máximo de arquivos excedido',
    labelMaxFiles: 'O número máximo de arquivos é {maxFiles}',
    labelFileTypeNotAllowed: 'Arquivo de tipo inválido',
    fileValidateTypeLabelExpectedTypes: 'Esperado {allButLastType} ou {lastType}',
    onaddfiles: (error, file) => {
        console.log(error)
        console.log(file)
        if (!error) {
            console.log('File added', file);
        } else {
            console.error('Error adding file', error);
        }
    },
    onprocessfile: (error, file) => {
        if (!error) {
            console.log('File processing', file);
        } else {
            console.error('Error processing file', error);
        }
    },
    onprocessfileabort: (file) => {
        console.log('File processing aborted', file);
    },
    onprocessfileprogress: (file, progress) => {
        console.log(`File progress: ${progress}%`, file);
    },
    onprocessfileerror: (file, error) => {
        console.error('File processing error', file, error);
    },
    onprocessfilesuccess: (file, serverResponse) => {
        console.log('File processing completed', file, serverResponse);
    },
});

// Manually trigger the upload
document.getElementById('uploadButton').addEventListener('click', () => {
    pond.processFiles();
});

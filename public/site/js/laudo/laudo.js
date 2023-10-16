document.addEventListener('DOMContentLoaded', function () {
    // Este código será executado após o carregamento completo da página

    var botaoGerarDocx = document.getElementById('gerar-docx');

    if (botaoGerarDocx) {
        botaoGerarDocx.addEventListener('click', function () {
            var conteudo = document.getElementById('conteudo').value;

            // Crie um objeto FormData para enviar o conteúdo ao servidor
            var formData = new FormData();
            formData.append('conteudo', conteudo);

            // Envie o conteúdo ao servidor para gerar o documento Word
            fetch('/laudo/gerar-docx', {
                method: 'POST',
                body: formData
            })
                .then(response => {
                    if (response.ok) {
                        return response.blob();
                    } else {
                        throw new Error('Erro ao gerar o documento Word.');
                    }
                })
                .then(blob => {
                    var url = URL.createObjectURL(blob);
                    var a = document.createElement('a');
                    a.href = url;
                    a.download = 'meu_documento.docx';
                    a.click();
                    URL.revokeObjectURL(url);
                })
                .catch(error => {
                    console.error(error);
                });
        });
    }
});

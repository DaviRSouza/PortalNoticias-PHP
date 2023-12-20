<?php
if(isset($_GET['aviso']) && $_GET['aviso']=='tentou'){
    echo <<<SAIDA
        <script>\n
            alert("NÂO AUTORIZADO! \\n\\n usuário e/ou incorretos!!!");\n
        </script>
    SAIDA;
}

if(isset($_GET['aviso']) && $_GET['aviso']=='invasor'){
    echo <<<SAIDA
        <script>\n
            alert("AREA RESTRITA! \\n\\n USUÁRIO PRECISA SER AUTENTICADO!!!");\n
        </script>
    SAIDA;
}

if(isset($_GET['aviso']) && $_GET['aviso'] == 'nivel'){
    echo <<<SAIDA
        <script>\n
            alert("voce não tem autorização para acessar esta pagina!!!");\n
        </script>
    SAIDA;
}
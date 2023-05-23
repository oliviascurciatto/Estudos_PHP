<h2>Contato</h2>

<form action="/pages/forms/contato.php" method="POST" role="form">
    <div class="form-group">
        <label for="">Nome:</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome" />
    </div>
    <div>
        <label for="">E-mail:</label>
        <input type="email" class="form-control" name="email" placeholder="E-mail" />
    </div>
    <div>
        <label for="">Assunto:</label>
        <input type="text" class="form-control" name="subject" placeholder="Assunto" />
    </div>
    <div>
        <label for="msg">Mensagem:</label>
        <textarea class="form-control" name="message" id="msg" cols="30" rows="10" placeholder="Menssagem"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
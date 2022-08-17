<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <body>
        <div class="container-lg">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="donor-form">
                        <h1>Cadastro de Doador</h1>
                        <p class="hint-text">Cadastre seu doador aqui:</p>       
                        <form action="/examples/actions/confirmation.php" method="post">
                            <div class="row">
                                <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="inputName">Nome</label>
                                    <input type="text" name="name" class="form-control" id="inputName" required>
                                </div>
                                </div>
                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail" required>
                                </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputCpf">CPF</label>
                                        <input type="text" name="cpf" class="form-control" id="inputCpf" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputPhone">Telefone</label>
                                        <input type="text" name="phone" class="form-control" id="inputPhone" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputBornAt">Data de nascimento</label>
                                        <input type="date" name="born_at" class="form-control" id="inputBornAt" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

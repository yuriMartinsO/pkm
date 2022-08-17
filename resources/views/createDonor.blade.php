<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <body>
        <div class="container-lg">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @elseif(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-10 mx-auto">
                    <div class="donor-form">
                        <h1>Cadastro de Doador</h1>
                        <p class="hint-text">Cadastre seu doador aqui:</p>
                        <form action="" method="post">
                            @csrf
                            <div><h2>Informações do doador</h2></div>
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
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Intervalo de doação</label>
                                        <select class="form-control" name="donationInterval" id="exampleFormControlSelect1">
                                        {{ App\Http\Controllers\DonorController::showDonationIntervalOptions(); }}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <div class="form-group">
                                        <label for="inputDonationValue">Valor da doação</label>
                                        <input type="number" name="donationValue" class="form-control" id="inputDonationValue" required>
                                    </div>
                                </div>
                            </div>
                            <div><h2>Informações do endereço</h2></div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="inputPostalCode">CEP</label>
                                        <input type="text" name="postalcode" class="form-control" id="inputPostalCode" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputStreet">Rua</label>
                                        <input type="text" name="street" class="form-control" id="inputStreet" required>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="inputNumber">Número</label>
                                            <input type="number" name="number" class="form-control" id="inputNumber" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="inputNeighborhood">Bairro</label>
                                            <input type="text" name="neighborhood" class="form-control" id="inputNeighborhood" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div><h2>Cartão</h2></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputCardNumber">Número do cartão</label>
                                        <input type="cardNumber" name="cardNumber" class="form-control" id="inputCardNumber" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputFlag">Bandeira</label>
                                        <select class="form-control" name="cardFlag" required>
                                            <option value="" selected>Selecione um bandeira</option>
                                            <option value="visa">Visa</option>
                                            <option value="mastercard">MasterCard</option>
                                            <option value="jcb">JCB</option>
                                            <option value="diners">Diners</option>
                                            <option value="amex">Amex</option>
                                            <option value="elo">Elo</option>
                                            <option value="aura">Aura</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

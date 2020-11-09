   <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>DADOS</strong><small> DO VEÍCULO</small></div>
            <div class="card-body card-block">
                <div class="row">
                    <form action="../atualizar-veiculo-save/<?= segment(5) ?>" method="post">
                    <div class="form-group col-md-6">
                        <label for="company" class=" form-control-label">MARCA</label>
                        <input type="text" id="company" name="marca" value="<?= $dados_veiculo['marca'] ?>" required class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="street" class=" form-control-label">TIPO</label>
                        <select required type="number" id="street" name="tipo" class="form-control">
                            <option value="">SELECIONE</option>
                            <option value="ÔNIBUS">ÔNIBUS</option>
                            <option value="MICRO-ÔNIBUS">MICRO-ÔNIBUS</option>
                            <option value="VAN">VAN</option>
                            <option value="CARRO DE PASSEIO">CARRO DE PASSEIO</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="vat" class=" form-control-label">ANO</label>
                        <input type="number" id="vat" name="ano" value="<?= $dados_veiculo['ano']?>" class="form-control" maxlength="4" minlength="4">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="id" class=" form-control-label">PLACA</label>
                        <input type="text" id="id" name="placa" value="<?= $dados_veiculo['placa'] ?>" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="resp" class=" form-control-label">QUANTIDADE DE LUGARES</label>
                        <input type="number" required id="resp" name="lugares" value="<?= $dados_veiculo['lugares'] ?>" class="form-control">
                    </div>
                    

                </div><br>
                <button class="btn btn-success">CONCLUIR</button> 
                </form>
                        <a href="javascript:history.back()" class="btn btn-warning">VOLTAR</a>
            </div>
        </div>
    </div>


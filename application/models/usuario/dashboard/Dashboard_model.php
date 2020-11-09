<?php
class Dashboard_model extends CI_model
{

    public function login($dados)
    {
        $dados['usuario_password'] = criptografia($dados['usuario_password']);
        return $this->db->where($dados)->get('usuarios')->result_array()[0];
    }

    public function agenda_consulta(){

        $this->db->select('*');
        $query = $this->db->get('pacientes');
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function dados_sih($dados){
        if ($dados == null) {
            $dados['ano'] = date('Y');
        }

        $this->db->join('municipios_ibge', 'matias.munic_mov =  municipios_ibge.cod_ibge');
        $query = $this->db->get_where('matias', array('ano_cmpt' => $dados['ano']));
        //echo $this->db->last_query();
        return $query->result_array();
    }

     public function municipio_sih($dados){
        if ($dados == null) {
            $dados['ano'] = date('Y');
        }

        $this->db->select('munic_mov');
        $this->db->distinct();
        $query = $this->db->get_where('matias', array('ano_cmpt' => $dados['ano']));
     
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function veiculo_dados(){

        $this->db->select('*');            
        $query = $this->db->get_where('veiculos', array('veiculo_id' => segment('5')));
        //echo $this->db->last_query();
        return @$query->result_array()[0];
    }

    public function poltronas($viagem_id){
        $this->db->select('poltronas_json');
        $query = $this->db->get_where('viagens', array('viagem_id' => $viagem_id));
        //echo $this->db->last_query();
        // pre( $query->result_array()[0]['poltronas_json']);
        return $query->result_array()[0]['poltronas_json'];
    }

    public function nome_paciente(){

        $this->db->select('*');            
        $query = $this->db->get_where('pacientes', array('paciente_id' => segment('4')));
        //echo $this->db->last_query();
        return @$query->result_array()[0];
    }

    public function dados_veiculo(){

        $this->db->select('*');            
        $query = $this->db->get_where('veiculos', array('veiculo_id' => segment('3')));
        //echo $this->db->last_query();
        return @$query->result_array()[0];
    }

    public function nome_passageiro($paciente_id){

        $this->db->select('nome_paciente');            
        $query = $this->db->get_where('pacientes', array('paciente_id' => $paciente_id));
        //echo $this->db->last_query();
        return @$query->result_array()[0];
    }


     public function dados_casa(){

        $this->db->select('*');            
        $query = $this->db->get_where('casa_de_apoio', array('apoio_id' => segment('5')));
        //echo $this->db->last_query();
        return @$query->result_array()[0];
    }

    public function procedimentos(){
        $this->db->join('pacientes', 'procedimentos.paciente_id =  pacientes.paciente_id');
        $query = $this->db->get_where('procedimentos', array('realizado' => ''));
        //echo $this->db->last_query();

        return $query->result_array();
    }

    public function viagens(){
        $this->db->join('veiculos', 'veiculos.veiculo_id =  viagens.veiculo_id');
        $this->db->order_by('data', 'asc');
        $query = $this->db->get_where('viagens', array('realizada' => 'nao'));

        //echo $this->db->last_query();

        return $query->result_array();
    }

    public function casadeapoio(){
        $this->db->join('pacientes', 'casa_de_apoio.paciente_id =  pacientes.paciente_id');
        $query = $this->db->get_where('casa_de_apoio', array('saiu' => '0'));
        //echo $this->db->last_query();

        return $query->result_array();
    }

     public function baixa_casa_de_apoio(){
        $this->db->where('apoio_id', segment('4'));
        $this->db->update('casa_de_apoio', array('saiu' => 1 ));
        //echo $this->db->last_query();
    }

    public function atualizar_datas_casa($dados){

        $this->db->where('apoio_id', segment('4'));
        $this->db->update('casa_de_apoio', $dados);
        //echo $this->db->last_query();
    }

     public function procedimentos_tfd(){
        $this->db->join('pacientes', 'tfd.paciente_id =  pacientes.paciente_id');
        $query = $this->db->get_where('tfd', array('realizado' => ''));
        //echo $this->db->last_query();

        return $query->result_array();
    }


      public function procedimentos_i(){
        $query = $this->db->get_where('procedimentos', array('paciente_id' => segment('4')));

        //echo $this->db->last_query();

        return $query->result_array();
    }

     public function tfd_i(){
        $query = $this->db->get_where('tfd', array('paciente_id' => segment('4')));

        //echo $this->db->last_query();

        return $query->result_array();
    }

     public function procedimentos_i_tfd(){
        $this->db->join('pacientes', 'tfd.paciente_id =  pacientes.paciente_id');
        $query = $this->db->get_where('tfd', array('tfd_id' => segment('4')));

        //echo $this->db->last_query();

        return @$query->result_array()[0];
    }

    public function procedimentos_agenda(){
        $this->db->join('pacientes', 'procedimentos.paciente_id =  pacientes.paciente_id');
        $query = $this->db->get_where('procedimentos', array('procedimentos_id' => segment('4')));
        //echo $this->db->last_query();
        return @$query->result_array()[0];
    }

    public function pacientes(){

        $this->db->select('paciente_id, nome_paciente, cns_paciente, cpf, telefone_paciente');
        $this->db->order_by('nome_paciente', 'asc');
        $query = $this->db->get('pacientes');
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function veiculos(){

        $this->db->select();
        $this->db->order_by('marca', 'asc');
        $query = $this->db->get('veiculos');
        //echo $this->db->last_query();
        return $query->result_array();
    }

     public function tabela_proced(){

        $this->db->select('*');
        $query = $this->db->get('tabela_proced');
        //echo $this->db->last_query();
        return $query->result_array();
    }



    public function especialidades(){

        $this->db->select('*');
        $query = $this->db->get('especialidades');
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function salva_procedimentos($nome_procedimento, $especialidade, $estabelecimento_solicitante, $profissional_solicitante, $sintomas, $paciente_id, $data_solicitacao){

        $dados_usuario = array ('nome_procedimento' => $nome_procedimento, 'especialidade' => $especialidade, 'estabelecimento_solicitante' => $estabelecimento_solicitante, 'profissional_solicitante' => $profissional_solicitante, 'sintomas' => $sintomas, 'paciente_id' => $paciente_id, 'data_solicitacao' => $data_solicitacao, 'profissional_regulacao' => @$_SESSION['nome']);
            $this->db->insert('procedimentos', $dados_usuario);
        }

    public function atualiza_solicitacao($estabelecimento_prestador, $cidade_prestador, $cota, $profissional_agendamento, $data, $ponto_partida, $hora_viagem, $procedimentos_id){
            $data = array ('estabelecimento_prestador' => $estabelecimento_prestador, 'cidade_prestador' => $cidade_prestador, 'cota' => $cota, 'profissional_agendamento' => $profissional_agendamento, 'data' => $data, 'ponto_partida' => $ponto_partida, 'hora_viagem' => $hora_viagem);
            $this->db->where('procedimentos_id', $procedimentos_id);
            $this->db->update('procedimentos', $data);
        }

      public function edita_paciente($data){
            $this->db->where('paciente_id', segment('4'));
            $this->db->update('pacientes', $data);
        }

    public function atualiza_url($data){
            $this->db->update('urls', $data);
        }

    public function baixa_paciente($realizado){
            $this->db->where('procedimentos_id', segment('4'));
            $this->db->update('procedimentos', array('realizado' => $realizado ));
        }

        public function baixa_paciente_tfd($realizado){
            $this->db->where('tfd_id', segment('4'));
            $this->db->update('tfd', array('realizado' => $realizado ));
        }

       

    public function salva_paciente($dados){

        $this->db->insert('pacientes', $dados);

        }
    public function add_casa_de_apoio($dados){

        $this->db->insert('casa_de_apoio', $dados);

        }

    public function criar_viagem($veiculo_id, $dados_poltrona, $data, $realizada, $percurso){
        $dados = array ('data' => $data, 'veiculo_id' => $veiculo_id, 'poltronas_json' => $dados_poltrona, 'realizada' => $realizada, 'percurso' => $percurso);
        $this->db->insert('viagens', $dados);

        }
        

    public function cadastra_veiculo($dados){
        
        $this->db->insert('veiculos', $dados);

        }

    public function atualiza_veiculo($dados){

        $this->db->where('veiculo_id', segment('4'));
        $this->db->update('veiculos', $dados);
        //echo $this->db->last_query();
    }

    public function finalizar_viagem(){
        $this->db->where('viagem_id', segment('4'));
        $this->db->update('viagens', array('realizada' => sim ));
        //echo $this->db->last_query();
    }

    public function excluir_paciente($id){

        $this->db->where('paciente_id', $id);
        $this->db->delete('pacientes');
        }

    public function procedimentos_realizados($inicio, $fim){
        $fim = (isset($fim)) ? $fim : "3000-12-31";
        $inicio = (isset($inicio)) ? $inicio : "0000-01-01";

        $this->db->join('pacientes', 'procedimentos.paciente_id =  pacientes.paciente_id');
        $this->db->where('data <=', $fim);
        $this->db->where('data >=', $inicio);
        $query = $this->db->get_where('procedimentos', array('realizado' => 'sim'));
        //echo $this->db->last_query();
        return @$query->result_array();
    }

     public function demanda_reprimida($inicio, $fim){
        $fim = (isset($fim)) ? $fim : "3000-01-01";
        $inicio = (isset($inicio)) ? $inicio : "2000-01-01";

        $this->db->join('pacientes', 'procedimentos.paciente_id =  pacientes.paciente_id');
        $this->db->where('data <=', $fim);
        $this->db->where('data >=', $inicio);
        $query = $this->db->get_where('procedimentos', array('realizado' => 'nao'));
        //echo $this->db->last_query();
        return @$query->result_array();
    }


    public function procedimentos_realizados_tfd($inicio, $fim){
        $fim = (isset($fim)) ? $fim : "3000-01-01";
        $inicio = (isset($inicio)) ? $inicio : "2000-01-01";

        $this->db->join('pacientes', 'tfd.paciente_id =  pacientes.paciente_id');
        $this->db->where('data <=', $fim);
        $this->db->where('data >=', $inicio);
        $query = $this->db->get_where('tfd', array('realizado' => 'sim'));
        //echo $this->db->last_query();
        return @$query->result_array();
    }

     public function demanda_reprimida_tfd($inicio, $fim){
        $fim = (isset($fim)) ? $fim : "3000-01-01";
        $inicio = (isset($inicio)) ? $inicio : "2000-01-01";

        $this->db->join('pacientes', 'tfd.paciente_id =  pacientes.paciente_id');
        $this->db->where('data <=', $fim);
        $this->db->where('data >=', $inicio);
        $query = $this->db->get_where('tfd', array('realizado' => ' '));
        //echo $this->db->last_query();
        return @$query->result_array();
    }


     public function cadastra_tfd($dados){

        $this->db->insert('tfd', $dados);

        }

  

}
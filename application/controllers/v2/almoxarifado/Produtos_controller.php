<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Produtos_controller extends Sistema_Controller
{

    /**
     * GET: v2/almoxarifado/produtos
     */
    public function index(): void
    {
        $data['title'] = 'produtos';
        $data['produtos'] = $this->Produtos->getAll();
        $this->view('almoxarifado/Produtos_view', $data);
    }

    /**
     * POST: v2/almoxarifado/produtos/novo
     */
    public function novo(): void
    {
        $produto = $this->input->post();
        $this->Produtos->insert($produto);

        $this->session->set_flashdata('success', 'PRODUTO ADICIONADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }

    /**
     * POST: v2/almoxarifado/produtos/retirar
     */
    public function retirar()
    {
        $dados = $this->input->post();

        $produto = $this->db->get_where('produtos', ['produto_id'=>$dados['produto_id']])->row_array();

        if($dados['retirar_quantidade'] <= $produto['produto_quantidade_atual']){
            $quantidade_atual = $produto['produto_quantidade_atual'] - $dados['retirar_quantidade'];
            $this->db->update('produtos', ['produto_quantidade_atual'=>$quantidade_atual],['produto_id'=>$dados['produto_id']]);
            $this->session->set_flashdata('success', 'RETIRADA REALIZADA COM SUCESSO.');

            //HISTORICO DE ALMOXARIFADO
            $this->Historico_almoxarifado->insert(
                [
                    'h_a_tipo' => 'RETIRADA',
                    'h_a_produto_id' => $produto['produto_id'],
                    'h_a_estoque_id' => $produto['produto_estoque_id'],
                    'h_a_produto_quantidade' => $dados['retirar_quantidade'],
                    'h_a_destino' => $dados['h_a_destino'],
                    'h_a_usuario_id' => $this->session->usuario_id
                ]
            );
        } else {
            $this->session->set_flashdata('warning', 'QUANTIDADE INFORMADA MAIOR QUE QUANTIDADE EM ESTOQUE.');
        }
        redirect($this->agent->referrer());
    }

    /**
     * POST: v2/almoxarifado/produtos/repor
     */
    public function repor()
    {
        $dados = $this->input->post();
        $produto = $this->db->get_where('produtos', ['produto_id' => $dados['produto_id']])->row_array();

        $quantidade_atual = $produto['produto_quantidade_atual'] + $dados['repor_quantidade'];
        $this->db->update('produtos', ['produto_quantidade_atual' => $quantidade_atual], ['produto_id' => $dados['produto_id']]);
        $this->session->set_flashdata('success', 'REPOSIÇÃO REALIZADA COM SUCESSO.');
        
        //HISTORICO DE ALMOXARIFADO
        $this->Historico_almoxarifado->insert(
            [
                'h_a_tipo' => 'REPOSIÇÃO',
                'h_a_produto_id' => $produto['produto_id'],
                'h_a_estoque_id' => $produto['produto_estoque_id'],
                'h_a_produto_quantidade' => $dados['repor_quantidade'],
                'h_a_usuario_id' => $this->session->usuario_id
            ]
        );
        redirect($this->agent->referrer());
    }
}

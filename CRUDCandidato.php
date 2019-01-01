<?php

  class CRUDCandidato{

    /*
      Atributo que vai carregar a instancia da classe PDO com a conexão com o
      banco de dados.
     */
    private $pdo = null;

    /*
      Construtor da classe definido como visibilidade privada.
      Quando o objeto da classe CRUDAluno for criado uma conxeão ativa e
      válida deve ser fornecida.
     */
    public function __construct($conexao){
      $this->pdo = $conexao;
    }

    /*
      Método de inserção de novos registros de alunos.
    */
    public function inserir($nome, $nasc, $estado_civil, $telefone, $celular, $email, $senha, $cpf, $RG, $CEP, $cidade, $logradouro, $bairro, $numero, $complemento, $objetivo, $salario, $resumo, $qualificação, $experiencia){

      try{
            # numero de ? igual ao numero de campos
           $sql = "INSERT INTO Candidato (nome, nasc, estado_civil, telefone, celular, email,senha, cpf, Rg, CEP, cidade, logradouro, bairro, numero, complemento, objetivo, salario, resumo, qualificação, experiencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

           $stm = $this->pdo->prepare($sql);

           $stm->bindValue(1, $nome);
           $stm->bindValue(2, $nasc);
           $stm->bindValue(3, $estado_civil);
           $stm->bindValue(4, $telefone);
           $stm->bindValue(5, $celular);
           $stm->bindValue(6, $email);
           $stm->bindValue(7, $senha);
           $stm->bindValue(8, $cpf);
           $stm->bindValue(9, $RG);
           $stm->bindValue(10, $CEP);
           $stm->bindValue(11, $cidade);
           $stm->bindValue(12, $logradouro);
           $stm->bindValue(13, $bairro);
           $stm->bindValue(14, $numero);
           $stm->bindValue(15, $complemento);
           $stm->bindValue(16, $objetivo);
           $stm->bindValue(17, $salario);
           $stm->bindValue(18, $resumo);
           $stm->bindValue(19, $qualificação);
           $stm->bindValue(20, $experiencia);
           $stm->execute();

      }catch(PDOException $erro){
        // o ponto é o concatenador é necessario
       echo "Erro na linha:" . $erro->getLine();

      }

    }

    /*

    */
    public function selecionar(){

     try{

          $sql = "SELECT * FROM Candidato";

          $stm = $this->pdo->prepare($sql);

          $stm->execute();

          $dados = $stm->fetchAll(PDO::FETCH_OBJ);

          return $dados;

    }catch(PDOException $erro){

     echo "Erro na linha:" . $erro->getLine();

    }

  }

	public function selecionarCriterio($codigo){
		try{
  			$sql = "SELECT * FROM Candidato WHERE id_candidato = ?";
  			$stm = $this->pdo->prepare($sql);
  			$stm->bindValue(1, $codigo);

  			$stm->execute();
  			$dados = $stm->fetchAll(PDO::FETCH_OBJ);
  			return $dados;

    }catch(PDOException $erro){

     echo "Erro na linha:". $erro->getLine();

    }
	}

  public function alterar($nome,
                          $nasc,
                          $estado_civil,
                          $telefone,
                          $celular,
                          $cpf,
                          $RG ,
                          $CEP,
                          $cidade,
                          $logradouro,
                          $bairro,
                          $numero,
                          $complemento,
                          $objetivo,
                          $salario,
                          $codigo){
    $sql = "UPDATE Candidato SET  nome = ?,
                                  nasc = ?,
                                  estado_civil = ?,
                                  telefone = ?,
                                  celular = ?,
                                  cpf = ?,
                                  RG = ?,
                                  CEP = ?,
                                  cidade = ?,
                                  logradouro = ?,
                                  bairro = ?,
                                  numero = ?,
                                  complemento =?,
                                  objetivo = ?,
                                  salario = ?
                                  WHERE id_candidato = ?"; 

    try{
          $stm = $this->pdo->prepare($sql);

          $stm->bindValue(1, $nome);
          $stm->bindValue(2, $nasc);
          $stm->bindValue(3, $estado_civil);
          $stm->bindValue(4, $telefone);
          $stm->bindValue(5, $celular);
          $stm->bindValue(6, $cpf);
          $stm->bindValue(7, $RG);
          $stm->bindValue(8, $CEP);
          $stm->bindValue(9, $cidade);
          $stm->bindValue(10, $logradouro);
          $stm->bindValue(11, $bairro);
          $stm->bindValue(12, $numero);
          $stm->bindValue(13, $complemento);
          $stm->bindValue(14, $objetivo);
          $stm->bindValue(15, $salario);
          $stm->bindValue(16, $codigo);          
          
          $stm->execute();

    }catch(PDOException $erro){

     echo "Erro na linha:" . $erro->getLine();

    }


  }


  public function excluir($codigo){

    $sql = "DELETE FROM Candidato WHERE id_candidato = ?";

    try{

      $stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $codigo);

      $stm->execute();

    }catch(PDOException $erro){

     echo "Erro na linha:" . $erro->getLine();

    }

  }

  }

?>

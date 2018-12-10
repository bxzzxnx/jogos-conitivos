CREATE DATABASE `projeto_jogo`;
USE `projeto_jogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Dificuldade` (
  `id_Dificuldade` int(11) NOT NULL AUTO_INCREMENT,
  `desc_Dificuldade` varchar(45) DEFAULT NULL,
  `qntde_objetos` varchar(45) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_Dificuldade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pessoa` (
  `id_Pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `tel` int(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Resultado` (
  `id_Medico` int(11) NOT NULL,
  `id_Paciente` int(11) DEFAULT NULL,
  `datahora` varchar(45) DEFAULT NULL,
  `id_Dificuldade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Medico`),
  KEY `paciente_pessoa_fk` (`id_Paciente`),
  KEY `resultado_dificuldade_fk` (`id_Dificuldade`),
  CONSTRAINT `medico_pessoa_fk` FOREIGN KEY (`id_Medico`) REFERENCES `Pessoa` (`id_Pessoa`),
  CONSTRAINT `paciente_pessoa_fk` FOREIGN KEY (`id_Paciente`) REFERENCES `Pessoa` (`id_Pessoa`),
  CONSTRAINT `resultado_dificuldade_fk` FOREIGN KEY (`id_Dificuldade`) REFERENCES `Dificuldade` (`id_Dificuldade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
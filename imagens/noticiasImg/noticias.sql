-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Maio-2023 às 18:59
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `tipo` char(3) DEFAULT NULL,
  `titulo` tinytext DEFAULT NULL,
  `resumo` mediumtext DEFAULT NULL,
  `texto` longtext DEFAULT NULL,
  `imagem` varchar(30) DEFAULT NULL,
  `destaque` enum('sim','nao') DEFAULT NULL,
  `ativo` enum('s','n') NOT NULL DEFAULT 's'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `data`, `tipo`, `titulo`, `resumo`, `texto`, `imagem`, `destaque`, `ativo`) VALUES
(1, '2023-05-22', 'cul', 'Amigo de Rita Lee, Nelson Motta apresenta segundo volume de autobiografia da cantora', '‘Emocionante do início ao fim, nunca é sentimental, mas narrado com secura, elegância e ironia’, descreve colunista', 'Fomos amigos a vida inteira, desde a primeira vez que a vi, com 20 anos, nos Mutantes, cantando com Gilberto Gil em “Domingo no parque” no Festival da Música Brasileira de 1967. E me encantei por ela, como todo mundo, pelo resto da vida. Como todo o Brasil. Acompanhei de perto a sua carreira, fomos parceiros de músicas e aventuras, compartilhamos sucessos e fracassos, loucuras e confidências, testemunhei seu crescimento até se tornar uma giganta da cultura brasileira, e nos despedimos há um mês, quando li sua “Outra autobiografia” (Globo Livros, R$ 64,90), que ela me enviou pelo Guilherme Samora, com compromisso de segredo e missão de confiança de publicar a apresentação do livro hoje, dia do lançamento.Cada parágrafo é parte de uma carta de despedida de 175 páginas, escrita com intensidade e sinceridade extremas, com a razão e a emoção em equilíbrio e conflito, contando, entre lágrimas e gargalhadas, seus últimos dias a partir do diagnóstico de câncer, em março de 2021, e indo além de um emocionante relato de vida para ganhar alta qualidade literária. Emocionante do início ao fim, nunca é sentimental, mas narrado com secura, elegância e ironia, com o pleno domínio das palavras, com que ganhou a vida e fez um monte de gente feliz.', 'rita4.jpg', 'sim', 's'),
(2, '2023-05-22', 'cul', 'Roger Waters traz turnê de despedida ao Brasil; saiba datas e locais', 'Shows passam por Brasília, Rio, Porto Alegre, Curitiba, Belo Horizonte e São Paulo', 'A turnê de despedida de Roger Waters vai passar por seis cidades do Brasil, entre outubro e novembro de 2023. O anúncio oficial foi feito nesta segunda-feira pelos organizadores da turnê “This is Not a Drill”, oficialmente programada para rodar o mundo em 2020, mas adiada por causa da pandemia.As cidades por onde Waters passa serão Brasília, Rio, Porto Alegre, Curitiba, Belo Horizonte e São Paulo. A venda de ingressos para São Paulo, Belo Horizonte e Brasília começa no dia 24 de maio, ao meio-dia. Já os shows do Rio, Curitiba e Porto Alegre terão as vendas iniciadas no dia 25 de maio, também ao meio dia. Todos os ingressos estarão disponíveis no site da Eventim e em pontos de venda credenciados.Confira abaixo a agenda:', 'roger.jpg', 'sim', 's'),
(3, '2023-05-23', 'esp', 'Após repercussões, Espanha age e prende sete suspeitos de racismo contra Vini Jr.', 'Quatro são ligados ao boneco que representava o jogador enforcado; três estavam no jogo de domingo', 'A grande repercussão do caso de racismo sofrido por Vinicius Júnior no jogo entre Valencia e Real Madrid, no último domingo, no estádio Mestalla, fez com que as autoridades da Espanha se movimentassem. Nesta terça-feira, polícia nacional espanhola deteve um total de sete pessoas suspeitas de crimes de injúria racial e ódio contra o atacante brasileiro.Logo após a operação policial, o Valencia, por meio de uma nota oficial, afirmou estar cooperando com as autoridades na investigação e prometeu banir do estádio os torcedores culpados. Além disso, o clube espanhol garantiu que é \"totalmente falsa\" a afirmação de que todo o estádio proferiu insultos racistas ao jogador brasileiro.', 'vini.jpg', 'sim', 's'),
(4, '2023-05-21', 'esp', 'Bernardinho diz que poderia assumir posição na seleção de futebol', 'Treinador de vôlei deu declaração a Diego Ribas, em podcast que ex-jogador lança nesta segunda-feira', 'Bernardinho, que fez história no vôlei como treinador, foi o convidado de estreia do podcast do ex-jogador Diego Ribas, chamado 10 & Faixa. Ao longo da entrevista, Bernardinho revelou que poderia assumir um cargo na seleção, mas não na de vôlei, e sim na de futebol.— Em uma comissão técnica você teria condições? Claro, de contribuir, com certeza, pela minha experiência no esporte. Quem é o melhor treinador para isso? Quem é o melhor estrategista? Como é no futebol americano? O coach com todos os treinadores. Então você monta uma estrutura. Quem é o cara melhor de treinamento? Você conhece treinadores que são melhores de treino, treinadores melhores de estratégia. Por que não criar uma cultura assim? Eu poderia contribuir nesse aspecto. Mas sem a pretensão de ser (o treinador) não tenho esse conhecimento.', 'bernardo.jpg', 'sim', 's'),
(5, '2023-05-23', 'sau', 'Butantan começa a desenvolver vacina contra gripe aviária', NULL, NULL, NULL, NULL, 's');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

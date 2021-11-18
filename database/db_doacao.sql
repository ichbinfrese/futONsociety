-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_doacao
CREATE DATABASE IF NOT EXISTS `db_doacao` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `db_doacao`;

-- Copiando estrutura para tabela db_doacao.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `id_produto` bigint(20) unsigned NOT NULL,
  `id_dono` bigint(20) unsigned NOT NULL,
  `id_cachorro` bigint(20) unsigned NOT NULL,
  `id_funcionario` bigint(20) unsigned NOT NULL,
  `preco` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agenda_id_produto_foreign` (`id_produto`),
  KEY `agenda_id_dono_foreign` (`id_dono`),
  KEY `agenda_id_cachorro_foreign` (`id_cachorro`),
  KEY `agenda_id_funcionario_foreign` (`id_funcionario`),
  CONSTRAINT `agenda_id_cachorro_foreign` FOREIGN KEY (`id_cachorro`) REFERENCES `cachorro` (`id`) ON DELETE CASCADE,
  CONSTRAINT `agenda_id_dono_foreign` FOREIGN KEY (`id_dono`) REFERENCES `dono` (`id`) ON DELETE CASCADE,
  CONSTRAINT `agenda_id_funcionario_foreign` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id`) ON DELETE CASCADE,
  CONSTRAINT `agenda_id_produto_foreign` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.agenda: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` (`id`, `titulo`, `dia`, `hora`, `id_produto`, `id_dono`, `id_cachorro`, `id_funcionario`, `preco`, `info`, `created_at`, `updated_at`) VALUES
	(2, 'Banho normal', '2021-06-29', '23:18:00', 3, 4, 3, 2, 'R$60,00', 'é um cachorro agitado', '2021-06-30 02:18:30', '2021-06-30 20:29:47'),
	(3, 'Banho ultra', '2021-06-10', '19:38:00', 2, 3, 3, 1, 'R$100,00', '.', '2021-06-30 19:38:33', '2021-06-30 19:38:33');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.cachorro
CREATE TABLE IF NOT EXISTS `cachorro` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porte` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelagem` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produto` bigint(20) unsigned NOT NULL,
  `id_dono` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cachorro_id_produto_foreign` (`id_produto`),
  KEY `cachorro_id_dono_foreign` (`id_dono`),
  CONSTRAINT `cachorro_id_dono_foreign` FOREIGN KEY (`id_dono`) REFERENCES `dono` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cachorro_id_produto_foreign` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.cachorro: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cachorro` DISABLE KEYS */;
INSERT INTO `cachorro` (`id`, `nome`, `porte`, `pelagem`, `sexo`, `idade`, `cor`, `id_produto`, `id_dono`, `created_at`, `updated_at`) VALUES
	(3, 'Fred', 'Médio', 'Curta', 'Masculino', '1 ano e 1 mês', 'Preto e branco', 3, 3, '2021-06-30 00:41:28', '2021-06-30 00:41:46'),
	(4, 'tico', 'pequeno', 'longa', 'masculino', '6 anos', 'marrom', 2, 4, '2021-07-01 02:50:53', '2021-07-01 02:50:53');
/*!40000 ALTER TABLE `cachorro` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.dono
CREATE TABLE IF NOT EXISTS `dono` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.dono: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `dono` DISABLE KEYS */;
INSERT INTO `dono` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `created_at`, `updated_at`) VALUES
	(3, 'Vitoria Rottava', '091.182.389-12', '34430036', 'vitoria.co@aluno.ifsc.edu.br', 'Rua Osvaldo Aranha, 916', '2021-06-30 00:38:47', '2021-06-30 00:38:47'),
	(4, 'bernardo pretto', '897.764.908.00', '45789098', 'bernardo@gmail.com', 'Avenida Grêmio', '2021-06-30 00:39:29', '2021-06-30 00:39:29'),
	(5, 'Jack Meires', '899.222.444.12', '49 99442 5678', 'jackson@gmail.com', 'Rua Preett', '2021-06-30 00:40:26', '2021-06-30 00:40:26');
/*!40000 ALTER TABLE `dono` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.funcionario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` (`id`, `nome`, `cpf`, `salario`, `telefone`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'Irma de Oliveira', '560.500.039-04', 'R$2.000,00', '49999475149', 'irma@gmail.com', '2021-06-30 02:05:07', '2021-06-30 02:05:07'),
	(2, 'Altair Rottava', '456.784.389-23', 'R$1.850,00', '49991167951', 'altair@gmail.com', '2021-06-30 02:06:11', '2021-06-30 02:06:11');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.migrations: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_06_28_174656_create_funcionario_table', 1),
	(5, '2021_06_28_201103_create_produto_table', 1),
	(6, '2021_06_28_221745_create_dono_table', 1),
	(7, '2021_06_28_234127_create_cachorro_table', 1),
	(8, '2021_06_30_012019_create_agenda_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('vitoria.co@aluno.ifsc.edu.br', '$2y$10$7INybJyhXDo17xUhUzxmz.JEYvw91vW2AHx8ZOt35sthsFJqciYkO', '2021-07-03 20:18:26');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_estoque` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.produto: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`id`, `nome`, `marca`, `qtd_estoque`, `custo`, `created_at`, `updated_at`) VALUES
	(2, 'Shampoo Anti-Pulgas', 'Seda', '40 unidades', 'R$20,00', '2021-06-30 00:35:51', '2021-06-30 00:35:51'),
	(3, 'Shampoo para Pelos Brancos', 'Palmolivedog', '27 unidades', 'R$25,00', '2021-06-30 00:36:45', '2021-06-30 00:36:45'),
	(4, 'Shampoo para peludos', 'Pantenindo', '6 unidades', 'R$50,00', '2021-06-30 00:37:48', '2021-06-30 00:37:48');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando estrutura para tabela db_doacao.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doacao.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'vick', 'vick@gmail.com', NULL, '$2y$10$/71r8GKUVtROBICfjrwR7.dllApMRtkLJe70kstilzdVcLh8iRHL6', NULL, '2021-07-02 23:51:39', '2021-07-02 23:51:39'),
	(2, 'admin', 'admin@admin.com.br', NULL, '$2y$10$9yxG8.LSM2vNHM/jvMAREOHJk68dSShX/H7ebz0GrrpmByebAhUQy', NULL, '2021-07-03 19:53:15', '2021-07-03 19:53:15'),
	(3, 'vitoria', 'vitoria.co@aluno.ifsc.edu.br', NULL, '$2y$10$evEhMXruczlxvg3cyKab/.iuJ1EAwwUftIVsYyhxWgGZAQfrQItoq', 'G49yie99xBjDDZbIvG47kk4TxKBZaolibGsCslunMGUGGKv0DGV2Z9CMnGSm', '2021-07-03 20:16:33', '2021-07-03 20:16:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

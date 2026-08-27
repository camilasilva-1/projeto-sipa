🚨 SIPA — Sistema de Inteligência em Prescrições Adversas

API RESTful desenvolvida em Laravel, voltada para a segurança farmacêutica no varejo e em clínicas de especialidades. O objetivo central é mitigar o erro humano na prescrição e venda de medicamentos para pacientes com alergias pré-existentes, funcionando como uma camada de inteligência no backend.

Diferente de sistemas hospitalares fechados, o SIPA atua como suporte à decisão clínica, realizando o cruzamento automatizado entre a composição química dos medicamentos (por famílias de substâncias) e o histórico de alergias do paciente — priorizando a segurança de pacientes atendidos pela rede pública (SUS), sem interromper o fluxo de atendimento com bloqueios rígidos.

👥 Equipe

Camila Conceição
Marcos Vinicius
Giovana Gomes
Mayane Lins

💡 O problema

Erros de prescrição por alergias não verificadas ainda são uma causa evitável de dano ao paciente. O SIPA usa tecnologia para atacar esse ponto específico, sem exigir sistemas hospitalares complexos ou fechados.

⚙️ Como funciona
Requisição: o backend recebe um JSON com ID_Paciente e ID_Medicamento.
Busca de dados: consulta a lista de substâncias alérgicas do paciente e a composição química do medicamento.
Algoritmo de comparação: cruza os princípios ativos e códigos ATC (classificação química), identificando correlações mesmo quando os nomes não são idênticos (ex: alergia a Penicilina → alerta por semelhança com a classe dos Betalactâmicos).
Validação de regra de negócio: se houver risco, gera um alerta crítico e aguarda a ciência do profissional (CRM/CRF) para prosseguir.
Auditoria: registra a tentativa, quem consultou e por que o alerta foi gerado, mascarando dados sensíveis conforme a LGPD.

📐 Regras de negócio
Regra	Descrição
RN01	Impede a liberação de medicamentos cujo princípio ativo coincida com uma alergia registrada
RN02	Valida também por código ATC — mesma família química do alérgeno dispara alerta por semelhança farmacológica
RN03	Toda operação em alerta crítico exige identificação do profissional e justificativa técnica
RN04	Privacidade: o sistema responde apenas "Seguro" ou "Risco Detectado", sem expor o histórico completo do paciente
RN05	Toda decisão pós-alerta é vinculada ao profissional que autorizou a continuidade

🗃️ Modelagem de dados
Paciente — dados de identificação e vínculo com condições de saúde
Profissional — médico ou farmacêutico responsável (CRM/CRF)
Alergias — catálogo de substâncias alérgenas e nível de intensidade (leve, moderada, grave)
Paciente x Alergias — histórico clínico (tabela de relacionamento)
Medicamentos — nome comercial, princípio ativo, código ATC, fabricante, dosagem

🔒 Privacidade e conformidade (LGPD)
Sessões inativas são encerradas automaticamente.
O profissional insere o CPF apenas para vincular a consulta; o sistema processa tudo "no escuro".
A resposta ao ponto de venda/atendimento é binária: Seguro ou Risco Detectado — nunca a lista completa de condições do paciente.

🔮 Próximos passos
Integração com bases externas (ex: ANVISA) para atualização automática de princípios ativos e códigos ATC.
Suporte à decisão clínica: sugestão de medicamentos de classes terapêuticas alternativas quando um risco é detectado.

🛠️ Tecnologias
PHP / Laravel
MySQL
API RESTful

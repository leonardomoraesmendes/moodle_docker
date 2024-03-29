<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'reengagement', language 'pt_br', branch 'MOODLE_37_STABLE'
 *
 * @package   reengagement
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Esta atividade foi marcada como concluída';
$string['afterdelay'] = 'Após intervalo';
$string['areyousure'] = 'Você tem certeza que deseja fazer esta alteração?';
$string['completeattimex'] = 'Esta atividade será concluída às {$a}';
$string['completion'] = 'Conclusão';
$string['completiondatesupdated'] = 'Datas de conclusão atualizadas.';
$string['completiontime'] = 'Tempo de conclusão';
$string['completionwillturnon'] = 'Note que adicionar esta atividade ao curso irá ativar a conclusão da atividade.';
$string['crontask'] = 'Cron task do reengajamento';
$string['cronwarning'] = 'A tarefa agendada do Reengagement não é executada há pelo menos 60 min - O Cron deve estar configurado para que este módulo funcione corretamente.';
$string['days'] = 'Dias';
$string['duration'] = 'Duração';
$string['duration_help'] = '<p>A duração do reengajamento é o período de tempo entre o usuário iniciar um reengajamento, e ele ser marcado como realizado.
A duração do reengajamento é expressa como tamanho do período (ex. Semanas) e o número de períodos (ex. 7).</p>

<p>Este exemplo significaria que um usuário iniciando um período de reengajamento agora seria marcado como completo daqui a 7 semanas.</p>';
$string['emailcontent'] = 'Conteúdo do email (Usuário)';
$string['emailcontentdefaultvalue'] = 'Este é um lembrete do curso %coursename%.';
$string['emailcontent_help'] = 'O conteúdo deste campo é utilizado quando um módulo envia um email a um usuário.';
$string['emailcontentmanager'] = 'Conteúdo do email (Gerente)';
$string['emailcontentmanagerdefaultvalue'] = 'Este é um lembrete do curso %coursename%, a respeito do usuário %userfirstname% %userlastname%.';
$string['emailcontentmanager_help'] = 'Quando o módulo envia um email a um gerente de usuário, ele usa o conteúdo deste campo.';
$string['emailcontentthirdparty'] = 'Conteúdo da notificação (terceiro)';
$string['emailcontentthirdpartydefaultvalue'] = 'Este é um lembrete do curso %courseshortname%, referente ao usuário %userfirstname% %userlastname%.';
$string['emailcontentthirdparty_help'] = 'Quando o módulo notifica um terceiro, utiliza esse campo como o conteúdo da notificação.';
$string['emaildelay'] = 'Atraso de email';
$string['emaildelay_help'] = 'Quando o módulo é setado para enviar email para os usuários "após atraso", esta configuração controla quão longo é o atraso.';
$string['emailrecipient'] = 'Destinatário(s)';
$string['emailrecipient_help'] = 'Quando um email precisa ser enviado para incitar um usuário a reengajar com o curso, esta configuração controla se o email é enviado ao usuário, seu gerente, ou ambos.';
$string['emailsubject'] = 'Assunto(Usuário)';
$string['emailsubject_help'] = 'Quando o módulo envia email a um usuário, ele usa este campo como assunto.';
$string['emailsubjectmanager'] = 'Assunto (Gerente)';
$string['emailsubjectmanager_help'] = 'Quando um módulo envia email a um gerente de usuário, ele usa este campo como assunto.';
$string['emailsubjectthirdparty'] = 'Assunto da notificação (terceiro)';
$string['emailsubjectthirdparty_help'] = 'Quando o módulo notifica um terceiro, utiliza esse campo como o assunto da notificação.';
$string['emailtime'] = 'Hora do email';
$string['emailuser'] = 'Usuário do email';
$string['emailuser_help'] = 'Quando a atividade deve enviar email a usuários: <ul>
<li>Nunca: Não envie emails.</li>
<li>Na conclusão do reengajamento: Envie email quando a atividade de reengajamento for concluída.</li>
<li>Após atraso: Envie email certo tempo após ele ter iniciado o módulo.</li>
</ul>';
$string['frequencytoohigh'] = 'O número máximo de lembretes com o período de atraso setado é {$a}.';
$string['hours'] = 'Horas';
$string['introdefaultvalue'] = 'Esta é uma atividade de reengajamento. Seu propósito é impor um lapso de tempo entre atividade que precedam ele, e as atividades seguintes.';
$string['messageprovider:mod_reengagement'] = 'Notificações de reengajamento';
$string['minutes'] = 'Minutos';
$string['modulename'] = 'Reengajamento';
$string['modulenameplural'] = 'Reengajamentos';
$string['never'] = 'Nunca';
$string['newcompletiontime'] = 'Novo tempo de conclusão';
$string['nochange'] = 'Sem alterações';
$string['nochangenoaccess'] = 'Sem alterações (usuário não acessou o curso)';
$string['noemailattimex'] = 'A mensagem agendada para {$a} não será enviada porque você não completou a atividade de destino';
$string['nosuppresstarget'] = 'Nenhuma atividade de destino selecionada';
$string['oncompletion'] = 'Ao completar o reengajamento';
$string['periodtoolow'] = 'O intervalo está muito pequeno - ele deve ser ao menos 5 minutos.';
$string['pluginadministration'] = 'Administração de Reengajamento';
$string['pluginname'] = 'Reengajamento';
$string['receiveemailattimex'] = 'A mensagem será enviada em {$a}.';
$string['receiveemailattimexunless'] = 'A mensagem será enviada em {$a}, a não ser que você conclua a atividade.';
$string['reengagement'] = 'reengajamento';
$string['reengagement:addinstance'] = 'reengagement:addinstance';
$string['reengagement:bulkactions'] = 'Realize ações em lote de engajamento';
$string['reengagementduration'] = 'Duração do reengajamento';
$string['reengagement:editreengagementduration'] = 'Editar Duração do Reengajamento';
$string['reengagementfieldset'] = 'Detalhes do reengajamento';
$string['reengagementintro'] = 'Introdução do reengajamento';
$string['reengagementname'] = 'Nome do Reengajamento';
$string['reengagementsinprogress'] = 'Reengajamentos em progresso';
$string['reengagement:startreengagement'] = 'Iniciar Reengajamento';
$string['remindercount'] = 'Contador do lembrete';
$string['remindercount_help'] = 'Este é o número de vezes um e-mail é enviado após cadas período de atraso. Existem algumas limitações nos valores possíveis.<ul>
<li>menos de 24 hrs - limite de 2 lembretes.</li>
<li>menos de 5 dias - limite de 10 lembretes.</li>
<li>menos de 15 dias - limite de 26 lembretes.</li>
<li>acima de 15 dias - limite máximo de 40 lembretes.</li></ul>';
$string['resetbyenrolment'] = 'Pela data da inscrição e duração de: {$a}';
$string['resetbyfirstaccess'] = 'Pelo primeiro acesso ao curso e duração de: {$a}';
$string['resetbyspecificdate'] = 'Por data específica';
$string['resetcompletion'] = 'Resetar data de conclusão';
$string['search:activity'] = 'Reengajamento - Informação sobre a atividade';
$string['specifydate'] = 'Definir data de conclusão para:';
$string['suppressemail'] = 'Ocultar notificação se a atividade definida for concluída';
$string['suppressemail_help'] = 'Esta opção informa a atividade para ocultar as notificações aos usuários quando a atividade for definida como concluída.';
$string['suppresstarget'] = 'Atividade de destino';
$string['suppresstarget_help'] = 'Use este menu suspenso para escolher qual atividade deve ter a conclusão verificada antes de enviar o e-mail de lembrete.';
$string['thirdpartyemails'] = 'Destinatários de terceiros';
$string['thirdpartyemails_help'] = 'Uma lista de endereços de emails separados por vírgula dos terceiros que devem receber uma notificação quando o usuário concluir a atividade.';
$string['userandmanager'] = 'Usuário e Gerente';
$string['weeks'] = 'Semanas';
$string['withselectedusers'] = 'Com os usuários selecionados...';
$string['withselectedusers_help'] = '* Enviar mensagem - Para enviar uma mensagem para um ou mais participantes
* Redefinir data de conclusão por acesso ao curso - Para ajustar a data de conclusão do reengajamento com base no primeiro acesso ao curso.';

<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Oberts',
  'nav-completed-tickets'            => 'Tancats',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Tema',
  'table-description'                => 'Descripció',
  'table-intervention'               => 'Actuació',
  'table-owner'                      => 'Propietari',
  'table-status'                     => 'Estat',
  'table-last-updated'               => 'Última actualització',
  'table-priority'                   => 'Prioritat',
  'table-agent'                      => 'Tècnic',
  'table-category'                   => 'Categoria',
  
  // Agent related
  'table-change-agent'               => 'Canviar tècnic',
  'table-one-agent'                  => 'Només hi ha un tècnic en aquesta categoria',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'No hi ha dades disponibles a la taula',
  'table-info'                       => '_TOTAL_ Registres. Mostrant _START_ a _END_',
  'table-info-empty'                 => 'Mostra 0 a 0 de 0 registres',
  'table-info-filtered'              => '(filtrat _MAX_ total de registres)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Mostra _MENU_ registres',
  'table-loading-results'            => 'Carregant...',
  'table-processing'                 => 'En procés...',
  'table-search'                     => 'Cerca: ',
  'table-zero-records'               => 'No s\'han trobat coincidències',
  'table-paginate-first'             => 'Primer',
  'table-paginate-last'              => 'Últim',
  'table-paginate-next'              => 'Següent',
  'table-paginate-prev'              => 'Anterior',
  'table-aria-sort-asc'              => ': activar per ordenar ordre ascendent',
  'table-aria-sort-desc'             => ': activar per ordenar ordre descendent',
  
  'filter-pov'                       => 'Vista',
  'filter-category-all'              => 'Totes',
  'filter-on-total'                  => 'Compte segons filtre',
  'filter-off-total'                 => 'Compte total',

  'btn-back'                         => 'Enrere',
  'btn-cancel'                       => 'Cancel·lar',
  'btn-change'                       => 'Canviar',
  'btn-close'                        => 'Tancar',
  'btn-delete'                       => 'Esborrar',
  'btn-edit'                         => 'Editar',
  'btn-mark-complete'                => 'Tancar Tiquet',
  'btn-submit'                       => 'Enviar',

  'ticket'                           => 'Tiquet',
  'user'                             => 'Usuari',
  'agent'                            => 'Tècnic',
  'agents'                           => 'Tècnics',
  'category'                         => 'Categoria',
  'colon'                            => ': ',
  'comments'                         => 'Comentaris',
  'created'                          => 'Creat',
  'date-info-created'                => 'Data de creació',
  'date-info-updated'                => 'Data de darrer canvi',
  'description'                      => 'Descripció',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Última actualització',
  'no-replies'                       => 'Sense respostes.',
  'owner'                            => 'Propietari',
  'priority'                         => 'Prioritat',
  'reopen-ticket'                    => 'Reobrir Tiquet',
  'reply'                            => 'Respondre',
  'responsible'                      => 'Tècnic',
  'status'                           => 'Estat',
  'subject'                          => 'Tema',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Tiquets',

// tickets/____
  'index-my-tickets'                 => 'Els meus Tiquets',
  
  'btn-create-new-ticket'            => 'Crear nou',
  'index-complete-none'              => 'No hi han tiquets tancats',
  'index-active-check'               => 'Assegureu-vos de revisar els tiquets oberts si no pot trobar el seu tiquet.',
  'index-active-none'                => 'No hi ha tiquets oberts,',
  'index-create-new-ticket'          => 'crear nou tiquet',
  'index-complete-check'             => 'Assegureu-vos de revisar els tiquets tancats si no pot trobar el seu tiquet.',

  'create-ticket-title'              => 'Nou formulari de Tiquet',
  'create-new-ticket'                => 'Crear Nou Tiquet',
  'create-ticket-brief-issue'        => 'Tema del tiquet',
  'create-ticket-describe-issue'     => 'Descriu els detalls del problema',

  'show-ticket-title'                => 'Tiquet',
  'show-ticket-js-delete'            => 'Esteu segur que voleu esborrar?: ',
  'show-ticket-modal-delete-title'   => 'Esborrar Tiquet',
  'show-ticket-modal-delete-message' => 'Esteu segur que voleu esborrar el tiquet?: :subject?',
  
  'validate-ticket-subject.required' => 'Cal indicar un tema. Si us plau, indica en poques paraules de què es tracta',
  'validate-ticket-subject.min'      => 'Cal que indiquis un tema més llarg',
  'validate-ticket-content.required' => 'Cal indicar una descripció. Si adjuntes alguna imatge és necessari que també afegeixis un text explicatiu',
  'validate-ticket-content.min'      => 'Cal indicar una descripció més llarga, encara que ja hi hagi imatges adjuntes',
  

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Agents :names S\'ha\n afegit com Agent\s',
  'administrators-are-added-to-administrators'      => 'Administradors :names S\'ha\n agegit com Administrador\s',
  'agents-joined-categories-ok'                     => 'Categories triades amb èxit',
  'agents-is-removed-from-team'                     => 'Agent\s :name eliminat\s del grup d\'agents',
  'administrators-is-removed-from-team'             => 'Administrator\s :name eliminat\s del grup d\'administradors',

// CategoriesController
  'category-name-has-been-created'   => 'La categoria :name s\'ha creat!',
  'category-name-has-been-modified'  => 'La categoria :name s\'ha modificat!',
  'category-name-has-been-deleted'   => 'La categoria :name s\'ha esborrat!',

// PrioritiesController
  'priority-name-has-been-created'   => 'La prioritat :name s\'ha creat!',
  'priority-name-has-been-modified'  => 'La prioritat :name s\'ha modificat!',
  'priority-name-has-been-deleted'   => 'La prioritat :name s\'ha esborrat!',
  'priority-all-tickets-here'        => 'Totes les prioritats relacionades amb els tiquets',

// StatusesController
  'status-name-has-been-created'   => 'The status :name s\'ha creat!',
  'status-name-has-been-modified'  => 'The status :name s\'ha modificat!',
  'status-name-has-been-deleted'   => 'The status :name s\'ha esborrat!',
  'status-all-tickets-here'        => 'Tots els registres relacionats amb l\'estat',

// CommentsController
  'comment-has-been-added-ok'        => 'El comentari s\'ha afegit correctament',

// NotificationsController
  'notify-new-comment-from'          => 'Nou comentari de ',
  'notify-on'                        => ' Conectat ',
  'notify-status-to-complete'        => ' Estat per completear',
  'notify-status-to'                 => ' Estat per ',
  'notify-transferred'               => ' enviat ',
  'notify-to-you'                    => ' per tu',
  'notify-created-ticket'            => ' crear tiquet ',
  'notify-updated'                   => ' actualitzat ',

 // TicketsController
  'the-ticket-has-been-created'      => 'El tiquet s\'ha creat!',
  'the-ticket-has-been-modified'     => 'El tiquet :name s\'ha modificat!', //revisar no tenia :name
  'the-ticket-has-been-deleted'      => 'El tiquet :name s\'ha esborrat!',
  'the-ticket-has-been-completed'    => 'El tiquet :name s\'ha tancat!',
  'the-ticket-has-been-reopened'     => 'El tiquet :name s\'ha reobert',
  'you-are-not-permitted-to-do-this' => 'No tens permisos per fer aquesta acció!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'No tens permisos per accedir a aquesta pàgina!',

];

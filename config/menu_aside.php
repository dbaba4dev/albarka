<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/dashboard',
            'new-tab' => false,
        ],

        // Employees
        [
            'section' => 'Staffs',
        ],
        [
            'title' => 'Employees',
            'icon' => 'media/svg/icons/Communication/Add-user.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Employees',
                    'root' => true,
                    'page' => '/employees',
                    'bullet' => 'dot',
                ],
                [
                    'title' => 'New Employee',
                    'root' => true,
                    'page' => '/employees/create',
                    'bullet' => 'dot',
                ],
                [
                    'title' => 'Categories',
                    'root' => true,
                    'page' => '/employeeCategories',
                    'bullet' => 'dot',
                ],
                ]
            ]
        ]
                /*
                [
                    'title' => 'Projects',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Columns 1',
                            'page' => 'custom/apps/projects/list-columns-1'
                        ],
                        [
                            'title' => 'List - Columns 2',
                            'page' => 'custom/apps/projects/list-columns-2'
                        ],
                        [
                            'title' => 'List - Columns 3',
                            'page' => 'custom/apps/projects/list-columns-3'
                        ],
                        [
                            'title' => 'List - Columns 4',
                            'page' => 'custom/apps/projects/list-columns-4'
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/projects/list-datatable'
                        ],
                        [
                            'title' => 'View Project',
                            'page' => 'custom/apps/projects/view-project'
                        ],
                        [
                            'title' => 'Add Project',
                            'page' => 'custom/apps/projects/add-project'
                        ],
                        [
                            'title' => 'Edit Project',
                            'page' => 'custom/apps/projects/edit-project'
                        ]
                    ]
                ],
                [
                    'title' => 'Support Center',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Home 1',
                            'page' => 'custom/apps/support-center/home-1'
                        ],
                        [
                            'title' => 'Home 2',
                            'page' => 'custom/apps/support-center/home-2'
                        ],
                        [
                            'title' => 'FAQ 1',
                            'page' => 'custom/apps/support-center/faq-1'
                        ],
                        [
                            'title' => 'FAQ 2',
                            'page' => 'custom/apps/support-center/faq-2'
                        ],
                        [
                            'title' => 'FAQ 3',
                            'page' => 'custom/apps/support-center/faq-3'
                        ],
                        [
                            'title' => 'Feedback',
                            'page' => 'custom/apps/support-center/feedback'
                        ],
                        [
                            'title' => 'License',
                            'page' => 'custom/apps/support-center/license'
                        ]
                    ]
                ],
                [
                    'title' => 'Chat',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Private',
                            'page' => 'custom/apps/chat/private'
                        ],
                        [
                            'title' => 'Group',
                            'page' => 'custom/apps/chat/group'
                        ],
                        [
                            'title' => 'Popup',
                            'page' => 'custom/apps/chat/popup'
                        ]
                    ]
                ],
                [
                    'title' => 'Todo',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Tasks',
                            'page' => 'custom/apps/todo/tasks'
                        ],
                        [
                            'title' => 'Docs',
                            'page' => 'custom/apps/todo/docs'
                        ],
                        [
                            'title' => 'Files',
                            'page' => 'custom/apps/todo/files'
                        ]
                    ]
                ],
                [
                    'title' => 'Inbox',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'label' => [
                        'type' => 'label-danger label-inline',
                        'value' => 'new'
                    ]
                ]
            ]
        ],
     /*   [
            'title' => 'Pages',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Wizard',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Wizard 1',
                            'page' => 'custom/pages/wizard/wizard-1'
                        ],
                        [
                            'title' => 'Wizard 2',
                            'page' => 'custom/pages/wizard/wizard-2'
                        ],
                        [
                            'title' => 'Wizard 3',
                            'page' => 'custom/pages/wizard/wizard-3'
                        ],
                        [
                            'title' => 'Wizard 4',
                            'page' => 'custom/pages/wizard/wizard-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Pricing Tables',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Pricing Tables 1',
                            'page' => 'custom/pages/pricing/pricing-1'
                        ],
                        [
                            'title' => 'Pricing Tables 2',
                            'page' => 'custom/pages/pricing/pricing-2'
                        ],
                        [
                            'title' => 'Pricing Tables 3',
                            'page' => 'custom/pages/pricing/pricing-3'
                        ],
                        [
                            'title' => 'Pricing Tables 4',
                            'page' => 'custom/pages/pricing/pricing-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Invoices',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Invoice 1',
                            'page' => 'custom/pages/invoices/invoice-1'
                        ],
                        [
                            'title' => 'Invoice 2',
                            'page' => 'custom/pages/invoices/invoice-2'
                        ]
                    ]
                ],
                [
                    'title' => 'User Pages',
                    'bullet' => 'dot',
                    'label' => [
                        'type' => 'label-rounded label-primary',
                        'value' => '2'
                    ],
                    'submenu' => [
                        [
                            'title' => 'Login 1',
                            'page' => 'custom/pages/users/login-1',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 2',
                            'page' => 'custom/pages/users/login-2',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 3',
                            'page' => 'custom/pages/users/login-3',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 4',
                            'page' => 'custom/pages/users/login-4',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 5',
                            'page' => 'custom/pages/users/login-5',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 6',
                            'page' => 'custom/pages/users/login-6',
                            'new-tab' => true
                        ]
                    ]
                ],
                [
                    'title' => 'Error Pages',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Error 1',
                            'page' => 'custom/pages/errors/error-1',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 2',
                            'page' => 'custom/pages/errors/error-2',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 3',
                            'page' => 'custom/pages/errors/error-3',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 4',
                            'page' => 'custom/pages/errors/error-4',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 5',
                            'page' => 'custom/pages/errors/error-5',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 6',
                            'page' => 'custom/pages/errors/error-6',
                            'new-tab' => true
                        ]
                    ]
                ]
            ]
        ],*/

        // Layout
     /*   [
            'section' => 'Layout',
        ],
        [
            'title' => 'Themes',
            'desc' => '',
            'icon' => 'media/svg/icons/Design/Bucket.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Light Aside',
                    'page' => 'layout/themes/aside-light'
                ],
                [
                    'title' => 'Dark Header',
                    'page' => 'layout/themes/header-dark'
                ]
            ]
        ],
        [
            'title' => 'Subheaders',
            'desc' => '',
            'icon' => 'media/svg/icons/Code/Compiling.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Toolbar Nav',
                    'page' => 'layout/subheader/toolbar'
                ],
                [
                    'title' => 'Actions Buttons',
                    'page' => 'layout/subheader/actions'
                ],
                [
                    'title' => 'Tabbed Nav',
                    'page' => 'layout/subheader/tabbed'
                ],
                [
                    'title' => 'Classic',
                    'page' => 'layout/subheader/classic'
                ],
                [
                    'title' => 'None',
                    'page' => 'layout/subheader/none'
                ]
            ]
        ],
        [
            'title' => 'General',
            'icon' => 'media/svg/icons/General/Settings-1.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Fixed Content',
                    'page' => 'layout/general/fixed-content'
                ],
                [
                    'title' => 'Minimized Aside',
                    'page' => 'layout/general/minimized-aside'
                ],
                [
                    'title' => 'No Aside',
                    'page' => 'layout/general/no-aside'
                ],
                [
                    'title' => 'Empty Page',
                    'page' => 'layout/general/empty-page'
                ],
                [
                    'title' => 'Fixed Footer',
                    'page' => 'layout/general/fixed-footer'
                ],
                [
                    'title' => 'No Header Menu',
                    'page' => 'layout/general/no-header-menu'
                ]
            ]
        ],
        [
            'title' => 'Builder',
            'root' => true,
            'icon' => 'media/svg/icons/Home/Library.svg',
            'page' => 'builder',
            'visible' => 'preview',
        ],*/

        // Features
       /* [
            'section' => 'Features',
        ],
        [
            'title' => 'Bootstrap',
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Typography',
                    'page' => 'features/bootstrap/typography'
                ],
                [
                    'title' => 'Buttons',
                    'page' => 'features/bootstrap/buttons'
                ],
                [
                    'title' => 'Button Group',
                    'page' => 'features/bootstrap/button-group'
                ],
                [
                    'title' => 'Dropdown',
                    'page' => 'features/bootstrap/dropdown'
                ],
                [
                    'title' => 'Navs',
                    'page' => 'features/bootstrap/navs'
                ],
                [
                    'title' => 'Tables',
                    'page' => 'features/bootstrap/tables'
                ],
                [
                    'title' => 'Progress',
                    'page' => 'features/bootstrap/progress'
                ],
                [
                    'title' => 'Modal',
                    'page' => 'features/bootstrap/modal'
                ],
                [
                    'title' => 'Alerts',
                    'page' => 'features/bootstrap/alerts'
                ],
                [
                    'title' => 'Popover',
                    'page' => 'features/bootstrap/popover'
                ],
                [
                    'title' => 'Tooltip',
                    'page' => 'features/bootstrap/tooltip'
                ]
            ]
        ],
        [
            'title' => 'Custom',
            'icon' => 'media/svg/icons/Files/Pictures1.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Utilities',
                    'page' => 'features/custom/utilities'
                ],
                [
                    'title' => 'Labels',
                    'page' => 'features/custom/label'
                ],
                [
                    'title' => 'Line Tabs',
                    'page' => 'features/custom/line-tabs'
                ],
                [
                    'title' => 'Advance Navs',
                    'page' => 'features/custom/advance-navs'
                ],
                [
                    'title' => 'Timeline',
                    'page' => 'features/custom/timeline'
                ],
                [
                    'title' => 'Pagination',
                    'page' => 'features/custom/pagination'
                ],
                [
                    'title' => 'Symbol',
                    'page' => 'features/custom/symbol'
                ],
                [
                    'title' => 'Overlay',
                    'page' => 'features/custom/overlay'
                ],
                [
                    'title' => 'Spinners',
                    'page' => 'features/custom/spinners'
                ],
                [
                    'title' => 'Iconbox',
                    'page' => 'features/custom/iconbox'
                ],
                [
                    'title' => 'Callout',
                    'page' => 'features/custom/callout'
                ],
                [
                    'title' => 'Ribbons',
                    'page' => 'features/custom/ribbons'
                ],
                [
                    'title' => 'Accordions',
                    'page' => 'features/custom/accordions'
                ]
            ]
        ],
        [
            'title' => 'Cards',
            'icon' => 'media/svg/icons/Layout/Layout-arrange.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'General Cards',
                    'page' => 'features/cards/general'
                ],
                [
                    'title' => 'Stacked Cards',
                    'page' => 'features/cards/stacked'
                ],
                [
                    'title' => 'Tabbed Cards',
                    'page' => 'features/cards/tabbed'
                ],
                [
                    'title' => 'Draggable Cards',
                    'page' => 'features/cards/draggable'
                ],
                [
                    'title' => 'Cards Tools',
                    'page' => 'features/cards/tools'
                ],
                [
                    'title' => 'Sticky Cards',
                    'page' => 'features/cards/sticky'
                ],
                [
                    'title' => 'Stretched Cards',
                    'page' => 'features/cards/stretched'
                ]
            ]
        ],
        [
            'title' => 'Widgets',
            'icon' => 'media/svg/icons/Devices/Diagnostics.svg',
            'root' => true,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'Lists',
                    'page' => 'features/widgets/lists'
                ],
                [
                    'title' => 'Stats',
                    'page' => 'features/widgets/stats'
                ],
                [
                    'title' => 'Charts',
                    'page' => 'features/widgets/charts'
                ],
                [
                    'title' => 'Mixed',
                    'page' => 'features/widgets/mixed',
                ],
                [
                    'title' => 'Tiles',
                    'page' => 'features/widgets/tiles',
                ],
                [
                    'title' => 'Engage',
                    'page' => 'features/widgets/engage'
                ],
                [
                    'title' => 'Base Tables',
                    'page' => 'features/widgets/base-tables',
                ],
                [
                    'title' => 'Advance Tables',
                    'page' => 'features/widgets/advance-tables',
                ],
                [
                    'title' => 'Forms',
                    'page' => 'features/widgets/forms',
                ]
            ]
        ],
        [
            'title' => 'Icons',
            'icon' => 'media/svg/icons/General/Attachment2.svg',
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'SVG Icons',
                    'page' => 'features/icons/svg'
                ],
                [
                    'title' => 'Flaticon',
                    'page' => 'features/icons/flaticon'
                ],
                [
                    'title' => 'Fontawesome 5',
                    'page' => 'features/icons/fontawesome5'
                ],
                [
                    'title' => 'Lineawesome',
                    'page' => 'features/icons/lineawesome'
                ],
                [
                    'title' => 'Socicons',
                    'page' => 'features/icons/socicons'
                ]
            ]
        ],
        [
            'title' => 'Calendar',
            'icon' => 'media/svg/icons/Design/Select.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Basic Calendar',
                    'page' => 'features/calendar/basic'
                ],
                [
                    'title' => 'List Views',
                    'page' => 'features/calendar/list-view'
                ],
                [
                    'title' => 'Google Calendar',
                    'page' => 'features/calendar/google'
                ],
                [
                    'title' => 'External Events',
                    'page' => 'features/calendar/external-events'
                ],
                [
                    'title' => 'Background Events',
                    'page' => 'features/calendar/background-events'
                ]
            ]
        ],
        [
            'title' => 'Charts',
            'icon' => 'media/svg/icons/Media/Equalizer.svg',
            'root' => true,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'amCharts',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'amCharts Charts',
                            'page' => 'features/charts/amcharts/charts'
                        ],
                        [
                            'title' => 'amCharts Stock Charts',
                            'page' => 'features/charts/amcharts/stock-charts'
                        ],
                        [
                            'title' => 'amCharts Maps',
                            'page' => 'features/charts/amcharts/maps'
                        ]
                    ]
                ],
                [
                    'title' => 'Flot Charts',
                    'page' => 'features/charts/flotcharts'
                ],
                [
                    'title' => 'Google Charts',
                    'page' => 'features/charts/google-charts'
                ],
                [
                    'title' => 'Morris Charts',
                    'page' => 'features/charts/morris-charts'
                ]
            ]
        ],
        [
            'title' => 'Maps',
            'icon' => 'media/svg/icons/Home/Book-open.svg',
            'root' => true,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'Google Maps',
                    'page' => 'features/maps/google-maps'
                ],
                [
                    'title' => 'JQVMap',
                    'page' => 'features/maps/jqvmap'
                ],
            ]
        ],
        [
            'title' => 'Miscellaneous',
            'icon' => 'media/svg/icons/Home/Mirror.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Kanban Board',
                    'page' => 'features/miscellaneous/kanban-board'
                ],
                [
                    'title' => 'Sticky Panels',
                    'page' => 'features/miscellaneous/sticky-panels'
                ],
                [
                    'title' => 'Block UI',
                    'page' => 'features/miscellaneous/blockui'
                ],
                [
                    'title' => 'Perfect Scrollbar',
                    'page' => 'features/miscellaneous/perfect-scrollbar'
                ],
                [
                    'title' => 'Tree View',
                    'page' => 'features/miscellaneous/treeview'
                ],
                [
                    'title' => 'Bootstrap Notify',
                    'page' => 'features/miscellaneous/bootstrap-notify'
                ],
                [
                    'title' => 'Toastr',
                    'page' => 'features/miscellaneous/toastr'
                ],
                [
                    'title' => 'SweetAlert2',
                    'page' => 'features/miscellaneous/sweetalert2'
                ],
                [
                    'title' => 'Dual Listbox',
                    'page' => 'features/miscellaneous/dual-listbox'
                ],
                [
                    'title' => 'Session Timeout',
                    'page' => 'features/miscellaneous/session-timeout'
                ],
                [
                    'title' => 'Idle Timer',
                    'page' => 'features/miscellaneous/idle-timer'
                ]
            ]
        ]*/
//    ]

];

<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute deve conter uma URL válida.',
    'after' => 'O campo :attribute deve conter uma data posterior a :date.',
    'after_or_equal' => 'O campo :attribute deve conter uma data superior ou igual a :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números e traços.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e números .',
    'array' => 'O campo :attribute deve conter um array.',
    'before' => 'O campo :attribute deve conter uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute deve conter uma data inferior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve conter um número entre :min e :max.',
        'file' => 'O campo :attribute deve conter um arquivo de :min a :max kilobytes.',
        'string' => 'O campo :attribute deve conter entre :min a :max caracteres.',
        'array' => 'O campo :attribute deve conter de :min a :max itens.',
    ],
    'boolean' => 'O campo :attribute deve conter o valor verdadeiro ou falso.',
    'confirmed' => 'A confirmação para o campo :attribute não coincide.',
    'date' => 'O campo :attribute não contém uma data válida.',
    'date_format' => 'A data informada para o campo :attribute não respeita o formato :format.',
    'different' => 'Os campos :attribute e :other devem conter valores diferentes.',
    'digits' => 'O campo :attribute deve conter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve conter entre :min a :max dígitos.',
    'dimensions' =>
        'O valor informado para o campo :attribute não é uma dimensão de imagem válida.',
    'distinct' => 'O campo :attribute contém um valor duplicado.',
    'email' => 'O campo :attribute não contém um endereço de email válido.',
    'exists' => 'O valor selecionado para o campo :attribute é inválido.',
    'file' => 'O campo :attribute deve conter um arquivo.',
    'filled' => 'O campo :attribute é obrigatório.',
    'image' => 'O campo :attribute deve conter uma imagem.',
    'in' => 'O campo :attribute não contém um valor válido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve conter um número inteiro.',
    'ip' => 'O campo :attribute deve conter um IP válido.',
    'ipv4' => 'O campo :attribute deve conter um IPv4 válido.',
    'ipv6' => 'O campo :attribute deve conter um IPv6 válido.',
    'json' => 'O campo :attribute deve conter uma string JSON válida.',
    'max' => [
        'numeric' => 'O campo :attribute não pode conter um valor superior a :max.',
        'file' => 'O campo :attribute não pode conter um arquivo com mais de :max kilobytes.',
        'string' => 'O campo :attribute não pode conter mais de :max caracteres.',
        'array' => 'O campo :attribute deve conter no máximo :max itens.',
    ],
    'mimes' => 'O campo :attribute deve conter um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve conter um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve conter um número superior ou igual a :min.',
        'file' => 'O campo :attribute deve conter um arquivo com no mínimo :min kilobytes.',
        'string' => 'O campo :attribute deve conter no mínimo :min caracteres.',
        'array' => 'O campo :attribute deve conter no mínimo :min itens.',
    ],
    'not_in' => 'O campo :attribute contém um valor inválido.',
    'numeric' => 'O campo :attribute deve conter um valor numérico.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato do valor informado no campo :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' =>
        'O campo :attribute é obrigatório quando o valor do campo :other é igual a :value.',
    'required_unless' =>
        'O campo :attribute é obrigatório a menos que :other esteja presente em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando um dos :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' =>
        'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same' => 'Os campos :attribute e :other devem conter valores iguais.',
    'size' => [
        'numeric' => 'O campo :attribute deve conter o número :size.',
        'file' => 'O campo :attribute deve conter um arquivo com o tamanho de :size kilobytes.',
        'string' => 'O campo :attribute deve conter :size caracteres.',
        'array' => 'O campo :attribute deve conter :size itens.',
    ],
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve conter um fuso horário válido.',
    'unique' => 'O valor informado para o campo :attribute já está em uso.',
    'uploaded' => 'Falha no Upload do arquivo :attribute.',
    'url' => 'O formato da URL informada para o campo :attribute é inválido.',
    'recaptcha' => 'É necessária a verificação do recaptcha',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => ['attribute-name' => ['rule-name' => 'custom-message']],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'address' => 'Endereço',
        'age' => 'Idade',
        'body' => 'Conteúdo',
        'city' => 'Cidade',
        'country' => 'País',
        'date' => 'Data',
        'day' => 'Dia',
        'description' => 'Descrição',
        'excerpt' => 'Resumo',
        'first_name' => 'Primeiro nome',
        'gender' => 'Gênero',
        'hour' => 'Hora',
        'last_name' => 'Sobrenome',
        'message' => 'Mensagem',
        'minute' => 'Minuto',
        'mobile' => 'Celular',
        'month' => 'Mês',
        'name' => 'Nome',
        'password_confirmation' => 'Confirmação da senha',
        'password' => 'Senha',
        'phone' => 'Telefone',
        'second' => 'Segundo',
        'sex' => 'Sexo',
        'state' => 'Estado',
        'subject' => 'Assunto',
        'text' => 'Texto',
        'time' => 'Hora',
        'title' => 'Título',
        'username' => 'Usuário',
        'year' => 'Ano',
        'nome' => 'Nome',
        'abreviacao' => 'Abreviação',
        'processo_id' => 'Processo',
        'tipo_andamento_id' => 'Tipo de andamento',
        'tipo_entrada_id' => 'Tipo de entrada',
        'tipo_prazo_id' => 'Tipo prazo',
        'data_prazo' => 'Data prazo',
        'data_entrega' => 'Data entrega',
        'observacoes' => 'Observação',
        'apensado_id' => 'Processo',
        'lotacao_id' => 'Lotação',
        'tipo_juiz_id' => 'Tipo juiz',
        'numero_lei' => 'Número lei',
        'autor' => 'Autor',
        'assunto' => 'Assunto',
        'link' => 'Link',
        'numero_judicial' => 'Número judicial',
        'numero_alerj' => 'Número Alerj',
        'tribunal_id' => 'Tribunal',
        'vara' => 'Vara',
        'data_distribuicao' => 'Data distribuição',
        'acao_id' => 'Ação',
        'juiz_id' => 'Juiz',
        'relator_id' => 'Relator',
        'apensos_obs' => 'Apensos',
        'reu' => 'Réu',
        'objeto' => 'Objeto',
        'merito' => 'Mérito',
        'liminar' => 'Liminar',
        'recurso' => 'Recurso',
        'procurador_id' => 'Procurador',
        'estagiario_id' => 'Estagiario',
        'assessor_id' => 'Assessor',
        'tipo_meio_id' => 'Meio',
        'observacao' => 'Observação',
        'data_arquivamento' => 'Data do arquivamento',
        'observacao_arquivamento' => 'Observação do arquivamento',
        'url_api' => 'Url',
        'email' => 'Email',
        'user_type_id' => 'Tipo de usuário',
        'personal_email' => 'Email pessoal',
        'opinion_scope_id' => 'Abrangência',
        'attorney_id' => 'Procurador',
        'opinion_type_id' => 'Tipo',
        'suit_number' => 'Número do Processo',
        'suit_sheet' => 'Folha do Processo',
        'identifier' => 'Identificador',
        'party' => 'Interessado',
        'abstract' => 'Ementa',
        'opinion' => 'Parecer',
        'file_pdf' => 'Arquivo .pdf',
        'file_doc' => 'Arquivo .doc',
        'is_active' => 'Ativo',
        'created_at' => 'Criado em',
        'created_by' => 'Criado por',
        'ementa' => 'Ementa',
        'data_andamento' => 'Data do andamento',
        'data_recebimento' => 'Data Recebimento',
        'approve_option_id' => 'Aprovado',
        'disabled_at' => 'Desabilitado em',
        'disabled_by_id' => 'Desabilitado por',
        'subject_id' => 'Assunto',
        'parent_id' => 'Assunto',
        'authorable_id' => 'Procurador',
        'authorable_type' => 'Procurador',
        'last_login_at' => 'Último login',
        'judgment_pdf' => 'Acórdão',
    ],

    'classes' => [
        'Tribunal' => 'Lei',
        'Acao' => 'Ação',
        'Juiz' => 'Juiz',
        'Processo' => 'Processo',
        'User' => 'Usuário',
        'Andamento' => 'Andamento',
        'Opinion' => 'Parecer',
        'OpinionSubject' => 'Assunto',
        'Lei' => 'Lei',
    ],
];

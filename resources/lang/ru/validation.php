<?php
return [
    'CodFormsPredpr.exists' => 'Данный тип организации не найден в базе данных. Необходимо выбрать другой тип',
    'Familiya.required' => 'Поле ' . __('messages.Last_name') . ' обязательно для заполнения',
    'Familiya.not_regex' => 'В поле ' . __('messages.Last_name') . ' не должны использоваться пробелы',
    'Familiya.string' => 'Поле ' . __('messages.Last_name') . ' должно быть строковым параметром',
    'Imya.required' => 'Поле ' . __('messages.First_name') . ' обязательно для заполнения',
    'Imya.not_regex' => 'В поле ' . __('messages.First_name') . ' не должны использоваться пробелы',
    'Imya.string' => 'Поле ' . __('messages.First_name') . ' должно быть строковым параметром',
    'Otchestvo.required' => 'Поле ' . __('messages.Middle_name') . ' обязательно для заполнения',
    'Otchestvo.not_regex' => 'В поле ' . __('messages.Middle_name') . ' не должны использоваться пробелы',
    'Otchestvo.string' => 'Поле ' . __('messages.Middle_name') . ' должно быть строковым параметром',
    'Gorod.required' => 'Поле ' . __('messages.City') . ' обязательно для заполнения',
    'Gorod.string' => 'Поле ' . __('messages.City') . ' должно быть строковым параметром',
    'Adres.required' => 'Поле ' . __('messages.Address') . ' обязательно для заполнения',
    'Adres.string' => 'Поле ' . __('messages.Address') . ' должно быть строковым параметром',
    'Telefon.numeric' => 'Поле ' . __('messages.Phone') . ' должно быть числом',
    'Telefon.digits' => 'Число символов в поле ' . __('messages.Phone') . ' должно быть :digits',
    'Seria.numeric' => 'Поле ' . __('messages.Passport_Series') . ' должно быть числом',
    'Seria.digits_between' => 'Поле ' . __('messages.Passport_Series') . ' должно иметь от :min до :max символов',
    'Seria.required_if' => 'Поле ' . __('messages.Passport_Series') . ' должно быть заполнено для физического лица',
    'Nomer.numeric' => 'Поле ' . __('messages.Passport_Number') . ' должно быть числом',
    'Nomer.digits_between' => 'Поле ' . __('messages.Passport_Number') . ' должно иметь от :min до :max символов',
    'Nomer.required_if' => 'Поле ' . __('messages.Passport_Number') . ' должно быть заполнено для физического лица',
    'Data.date' => 'Поле ' . __('messages.Passport_Data_Issued') . ' должно быть корректной датой, например \'01.01.2000\'',
    'Data.required_if' => 'Поле ' . __('messages.Passport_Data_Issued') . ' должно быть заполнено для физического лица',
    'KemVidan.string' => 'Поле ' . __('messages.Passport_Issued') . ' должно быть строковым параметром',
    'KemVidan.required_if' => 'Поле ' . __('messages.Passport_Issued') . ' должно быть заполнено для физического лица',
    'NaimenOrg.string' => 'Поле ' . __('messages.Organization_Name') . ' должно быть строковым параметром',
    'NaimenOrg.required_unless' => 'Поле ' . __('messages.Organization_Name') . ' должно быть заполнено для юридического лица',
    'VLice.string' => 'Поле ' . __('messages.Organization_Represented') . ' должно быть строковым параметром',
    'VLice.required_unless' => 'Поле ' . __('messages.Organization_Represented') . ' должно быть заполнено для юридического лица',
    'NaOsnovanii.string' => 'Поле ' . __('messages.Organization_With_Justification') . ' должно быть строковым параметром',
    'NaOsnovanii.required_unless' => 'Поле ' . __('messages.Organization_With_Justification') . ' должно быть заполнено для юридического лица',
    'INN.numeric' => 'Поле ' . __('messages.INN') . ' должно быть числом',
    'INN.digits_between' => 'Поле ' . __('messages.INN') . ' должно иметь от :min до :max символов',
    'INN.required_unless' => 'Поле ' . __('messages.INN') . ' должно быть заполнено для юридического лица',
    'KPP.numeric' => 'Поле ' . __('messages.KPP') . ' должно быть числом',
    'KPP.digits_between' => 'Поле ' . __('messages.KPP') . ' должно иметь от :min до :max символов',
    'KPP.required_unless' => 'Поле ' . __('messages.KPP') . ' должно быть заполнено для юридического лица',
    'RS.numeric' => 'Поле ' . __('messages.Payment_Account') . ' должно быть числом',
    'RS.digits_between' => 'Поле ' . __('messages.Payment_Account') . ' должно иметь от :min до :max символов',
    'RS.required_unless' => 'Поле ' . __('messages.Payment_Account') . ' должно быть заполнено для юридического лица',
];

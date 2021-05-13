connect()  - #Подключает базу данных
get_all_book_name($link)  - #Возварщает названия и id всех книг
get_information_for_book($link, $id)  - #Возвращает название и описание книги по id
get_information_for_author($link, $id)  - #Возвращает имя и биографию автора по id
get_all_book_by_author($link, $id)  - #Возвращает все книги автора по его id
get_all_problems_in_book_by_problem($link, $id)  - #Возвращает все проблемы в книгах по id проблемы
get_all_period($link)  - #Возвращает все id и названия периодов
 get_all_problem($link)  - #Возвращает все id и названия проблем
 get_all_book_by_period($link,$id)  - #Возвращает все названия книг и их id определенного периода
 get_all_author_by_period($link,$id)  - #Возвращает имена и id всех авторов определенноо периода
 get_all_character_by_book($link, $id)  - #Возвращает имена  id всех персонажей определенной книги 
 get_all_author($link)  - #Возвращает имена и id всех авторов
 get_all_quotes_by_problem($link,$id)  - #Возвращает все тексты и id цитат по определенной проблеме 
 get_id_character_by_quote($link,$id)  - #Возвращает id персонажа по цитате
 get_character_name_by_id($link,$id)  - #Возвращает имя персонажа по его id
 get_information_for_character($link, $id)  - #Возвращает всю информацию о персонаже по его id

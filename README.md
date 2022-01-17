# GetOrganized

## instrukcja konfiguracji
Projekt znajduje się na stronie https://student.agh.edu.pl/~jakubzar/test/. Aby uruchomić go na swoim serwerze, należy utworzyć bazę danych przy użyciu database.sql oraz dokonać edycji w pliku config.php. Należy to zrobić umieszczając odpowiednie dane logowania do utworzonej bazy w liniach 3-8, oraz linie ? podmienić na ścieżkę do katalogu głównego projektu na serwerze.

## dokumentacja użytkownika

## dokumentacja techniczna
Aplikacja zawiera kilka głównych modułów, znajdujących się w kolejnych podkatalogach:
- common - zawiera logowanie i rejestrację od strony serwera
- controllers - zawiera akcje dodawania projektu oraz pojedynczego tasku
- dao - zawiera plik z zapytaniami sql i połączeniem z bazą danych
- models - zawiera klasy dla każdego typu użytkownika oraz klasę tasku
- views - zawiera główną stronę projektu oraz w odpowiednich podkatalogach, strony dla każdego typu użytkownika

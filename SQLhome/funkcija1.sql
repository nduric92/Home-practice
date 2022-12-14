#Kreirati funkciju zadatak1 koja osigurava kako cjelobrojni tipovi podataka moraju biti između 980 i 5098


delimiter $$
create function prvizadatak() returns int
begin
	return FLOOR(RAND(980-5098));
end;
$$
delimiter ;
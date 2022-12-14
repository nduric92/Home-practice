#Kreirati funkciju zadatak1 koja osigurava kako cjelobrojni tipovi podataka moraju biti između 980 i 5098


delimiter $$
create function prvizadatak() returns int
begin
	return FLOOR( RAND() * (5098-980) + 980);
end;
$$
delimiter ;
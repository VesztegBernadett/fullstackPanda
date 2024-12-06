# Fullstack 2024

Figyelem! Az `.env.example` fájl a `backend` mappában található, és a `.env` fájl is ott lesz, mert a backend szerves része. Mivel ezt a többi container is használja, így egy hivatkozás jön létre indításkor a projektmappában.

## Indítás

A rendszer inicializálását és az első indítását a `start.sh` végzi.

```
./start.sh
```

## Leállítás

```
docker compose stop
```

## Eltávolítás

```
docker compose down -v
```

 - A `-v` hatására a köteteket is törli, így az adatbázisban tárolt adatok is megszűnnek.
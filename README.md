# Trabalho-Docker-IDS

Passo 1: Clonar Repositorio

  <b>git clone https://github.com/HenriqueHyonemoto/Trabalho-Docker-IDS.git</b>

Passo 2: Entrar no Diretorio

  <b>cd Trabalho-Docker-IDS/</b>

Passo 3: Criar Imagem

  <b>docker build -t serverweb:1.0 . </b>

Passo 4: Criar Container e Direcionar as Portas

  <b>docker container run -p 8080:80 -d serverweb:1.0</b>

Passo 5: Entrar no Endereço

  <b>localhost:8080</b>

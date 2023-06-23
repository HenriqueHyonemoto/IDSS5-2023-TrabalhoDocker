# Trabalho-Docker-IDS

Passo 1: Clonar Repositorio

  git clone https://github.com/HenriqueHyonemoto/Trabalho-Docker-IDS.git

Passo 2: Entrar no Diretorio

  cd Trabalho-Docker-IDS/

Passo 3: Criar Imagem

  docker build -t serverweb:1.0 .

Passo 4: Criar Container e Direcionar as Portas

  <b>docker container run -p 8080:80 -d serverweb:1.0</b>

Passo 5: Entrar no Endereço

  localhost:8080

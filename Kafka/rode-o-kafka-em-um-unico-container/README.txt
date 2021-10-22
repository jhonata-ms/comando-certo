# Instruções retiradas do link
https://kafka.apache.org/quickstart

# Baixe o kafka na raiz do projeto
# Link https://kafka.apache.org/downloads
# Caminho completo https://archive.apache.org/dist/kafka/2.8.0/kafka_2.12-2.8.0.tgz
kafka_2.12-2.8.0.tgz

# Construa a imagem
docker build -t jhonatams/kafka-in-docker .

# Rode o container
docker run -d ^
    --name kafka-in-docker ^
    --publish 9092:9092 ^
    jhonatams/kafka-in-docker

# Entre no container
docker exec -it -w /opt/kafka kafka-in-docker bash

------------------------------------------------------

# Create a topic
bin/kafka-topics.sh \
    --create \
    --topic meus-eventos \
    --bootstrap-server localhost:9092

# Details of the topic
bin/kafka-topics.sh \
    --describe \
    --topic meus-eventos \
    --bootstrap-server localhost:9092

# Write events
bin/kafka-console-producer.sh \
    --topic quickstart-events \
    --bootstrap-server localhost:9092

# Read events
bin/kafka-console-consumer.sh \
    --topic quickstart-events \
    --from-beginning \
    --bootstrap-server localhost:9092

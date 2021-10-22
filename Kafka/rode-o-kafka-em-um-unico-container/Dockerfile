FROM openjdk:8-slim
WORKDIR /opt
ENV KAFKA_VERSION="kafka_2.12-2.8.0"
COPY . .
RUN apt update && \
    apt install ncat -y
RUN tar -xzf ${KAFKA_VERSION}.tgz && \
    rm ${KAFKA_VERSION}.tgz && \
    mv ${KAFKA_VERSION} kafka
CMD ./start.sh

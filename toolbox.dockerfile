FROM ubuntu:20.04

# update
RUN apt update

# curl
RUN apt install -y curl

# vim
RUN apt install -y vim

# openssl
RUN apt install -y openssl

ENTRYPOINT ["sleep", "infinity"]
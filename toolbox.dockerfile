FROM ubuntu:20.04

# update
RUN apt update

# curl
RUN apt install -y curl

# vim
RUN apt install -y vim

# kubectl
# RUN 

ENTRYPOINT ["sleep", "infinity"]
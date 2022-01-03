FROM ubuntu:bionic

RUN apt update && \
    apt install ruby-full build-essential zlib1g-dev -y

RUN echo '# Install Ruby Gems to ~/gems' >> ~/.bashrc && \
    echo 'export GEM_HOME="$HOME/gems"' >> ~/.bashrc && \
    echo 'export PATH="$HOME/gems/bin:$PATH"' >> ~/.bashrc && \
    /bin/bash -c "source ~/.bashrc" && \
    gem install bundler && \
    gem install jekyll -v 3.9.0

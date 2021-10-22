#!/bin/bash
  
# turn on bash's job control
set -m

# Start first the zookeeper in the background
./kafka/bin/zookeeper-server-start.sh ./kafka/config/zookeeper.properties &

echo "Waiting zookeeper to launch..."
while ! nc -z localhost 2181; do   
  sleep 1 # wait for 1 second before check again.
done
echo "Zookeeper launched"

# Start the Kafka broker service
./kafka/bin/kafka-server-start.sh ./kafka/config/server.properties

# import required libraries 
import sounddevice as sd 
from scipy.io.wavfile import write 
import wavio as wv
import wave
import socket
import time
  
# Sampling frequency 
freq = 44100
  
# Recording duration 
duration = 60
s = socket.socket()
host = socket.gethostname() 
port = 8080
s.bind((host,port))
s.listen(1)

print("Waiting for any incoming connections ... ")
conn, addr = s.accept()
print(addr, "Has connected to the server")


i=1
while(i>0):
  
   recording = sd.rec(int(duration * freq),  
                   samplerate=freq, channels=2) 

   sd.wait() 
   
  
   write("record"+str(i)+".wav", freq, recording)  
  
   filename = "C:/Python/recordings/record"+str(i)+".wav"
   file = open(filename, 'rb')
   file_data = file.read(1024)
   while (file_data):
      conn.send(file_data)
      file_data = file.read(1024)
   conn.send(b'fin')
   file.close()
   print('Done sending')
   print("Data has been transmitted successfully")
   i=i+1
   

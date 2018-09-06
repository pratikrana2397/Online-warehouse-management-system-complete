class Player{
int number;
boolean isright;
void guessno(){
number=(int)(Math.random()*10);
System.out.println("The Player guessed"+number);
}
}
class guessgame{
Player p1;
Player p2;
Player p3;
void guess(){
while(true){
int num;
num=(int)(Math.random()*10);
p1.isright=false;
p2.isright=false;
p3.isright=false;
p1.guessno();
p2.guessno();
p3.guessno();
if(p1.number==num)
p1.isright=true;
if(p2.number==num)
p2.isright=true;
if(p3.number==num)
p3.isright=true;
if(p1.isright||p2.isright||p3.isright)
{
System.out.println("Player one predicted right? "+p1.isright);
System.out.println("Player two predicted right? "+p2.isright);
System.out.println("Player three predicted right? "+p3.isright);
break
}
else{System.out.println("None of them got right try again!!!");}
}
}
}
public class gamelauncher{
public static void main(String[] args){
guessgame g=new guessgame();
g.guess();
}
}
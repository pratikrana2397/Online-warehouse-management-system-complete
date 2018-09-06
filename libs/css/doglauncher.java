class gooddog{
private int size;
private string name;
	public int getsize(){
	return size;
	}
	public string getname(){
	return name;
	}
	public void setdata(int l,string s)
	{
	size=l;
	name=s;
	}
}
class doglauncher(){
	public static void main(String[] args){
	gooddog g=new gooddog();
	g.setdata(23,"Golu");
	system.out.println("The size of dog is "+g.getsize());
	system.out.println("The name of dog is "+g.getname());
	}
}
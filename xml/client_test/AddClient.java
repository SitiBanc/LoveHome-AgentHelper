import java.rmi.*;
import javax.xml.rpc.*;
import javax.swing.*;

import localhost.axis.services.AdditionService.*;

public class AddClient {
  public static void main(String[] args) throws RemoteException, 
                                                ServiceException {
    AdditionService service = new AdditionServiceLocator();
    Addition call = service.getAdditionService();
    
    String input = JOptionPane.showInputDialog("第一個整數");
    int num1 = Integer.parseInt(input);
    input = JOptionPane.showInputDialog("第二個整數");
    int num2 = Integer.parseInt(input);

    int result = call.addNumbers(num1, num2);

    System.out.println("總合 = " + result);
  }
}
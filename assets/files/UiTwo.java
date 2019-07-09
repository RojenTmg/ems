package ui;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.Color;
import javax.swing.JLabel;
import java.awt.Font;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;
import javax.swing.JTextField;
import javax.swing.JButton;

public class UiTwo extends JFrame {

	private JPanel contentPane;
	private JTextField textField;
	private JTextField textField_1;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					UiTwo frame = new UiTwo();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public UiTwo() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1280, 768);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBackground(Color.ORANGE);
		panel.setBounds(0, 0, 1262, 721);
		contentPane.add(panel);
		panel.setLayout(null);
		
		JPanel panel_1 = new JPanel();
		panel_1.setBackground(new Color(0,0,0,65));
		panel_1.setBounds(681, 51, 530, 620);
		panel.add(panel_1);
		panel_1.setLayout(null);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 24));
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Admin", "Researcher"}));
		comboBox.setBounds(257, 176, 163, 38);
		panel_1.add(comboBox);
		
		JLabel lblLoginAs = new JLabel("Login As");
		lblLoginAs.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 24));
		lblLoginAs.setBounds(96, 174, 101, 43);
		panel_1.add(lblLoginAs);
		
		JLabel lblLoginPage = new JLabel("Login Page");
		lblLoginPage.setBounds(193, 42, 158, 51);
		panel_1.add(lblLoginPage);
		lblLoginPage.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 30));
		
		JLabel lblUsername = new JLabel("Username");
		lblUsername.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 24));
		lblUsername.setBounds(96, 281, 115, 43);
		panel_1.add(lblUsername);
		
		JLabel lblPassword = new JLabel("Password");
		lblPassword.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 24));
		lblPassword.setBounds(96, 352, 115, 43);
		panel_1.add(lblPassword);
		
		textField = new JTextField();
		textField.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 20));
		textField.setBounds(257, 281, 163, 36);
		panel_1.add(textField);
		textField.setColumns(10);
		
		textField_1 = new JTextField();
		textField_1.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 20));
		textField_1.setBounds(257, 357, 163, 36);
		panel_1.add(textField_1);
		textField_1.setColumns(10);
		
		JButton btnLogin = new JButton("Login");
		btnLogin.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 20));
		btnLogin.setBounds(214, 476, 97, 38);
		panel_1.add(btnLogin);
		
		JLabel bg;
		ImageIcon bgname=new ImageIcon("gradient.jpg");
		bg = new JLabel("",bgname,JLabel.CENTER);
		bg.setBounds(0,0,1262,721);
		
		JLabel lblNorthamptonResearchCentre = new JLabel("Northampton Research Centre");
		lblNorthamptonResearchCentre.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 40));
		lblNorthamptonResearchCentre.setBounds(12, 51, 657, 66);
		panel.add(lblNorthamptonResearchCentre);
		
		JLabel lblResearchArticleManagement = new JLabel("Research Article Management");
		lblResearchArticleManagement.setFont(new Font("Microsoft YaHei UI Light", Font.PLAIN, 35));
		lblResearchArticleManagement.setBounds(12, 130, 657, 66);
		panel.add(lblResearchArticleManagement);
		
		JLabel lblWelcome = new JLabel("Welcome");
		lblWelcome.setFont(new Font("Lucida Calligraphy", Font.PLAIN, 60));
		lblWelcome.setBounds(163, 324, 305, 103);
		panel.add(lblWelcome);
	}
}
